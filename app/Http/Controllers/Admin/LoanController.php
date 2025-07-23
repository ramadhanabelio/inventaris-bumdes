<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\LoanNotification;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with(['user', 'item'])->latest()->get();
        return view('admin.loans.index', compact('loans'));
    }

    public function create()
    {
        $users = User::where('role', 'user')->get();
        $items = Item::all();
        return view('admin.loans.create', compact('users', 'items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'item_id' => 'required|exists:items,id',
            'borrowed_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:borrowed_date',
        ]);

        Loan::create([
            'user_id' => $request->user_id,
            'item_id' => $request->item_id,
            'borrowed_date' => $request->borrowed_date,
            'return_date' => $request->return_date,
            'status' => 'Diproses',
        ]);

        return redirect()->route('admin.loans.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function edit(Loan $loan)
    {
        $users = User::where('role', 'user')->get();
        $items = Item::all();
        return view('admin.loans.edit', compact('loan', 'users', 'items'));
    }

    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'item_id' => 'required|exists:items,id',
            'borrowed_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:borrowed_date',
        ]);

        $loan->update($request->all());

        return redirect()->route('admin.loans.index')->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect()->route('admin.loans.index')->with('success', 'Peminjaman berhasil dihapus.');
    }

    public function approve(Loan $loan)
    {
        $loan->update(['status' => 'Disetujui']);

        Mail::to($loan->user->email)->send(new LoanNotification($loan));

        return redirect()->back()->with('success', 'Peminjaman disetujui.');
    }

    public function reject(Loan $loan)
    {
        $loan->update(['status' => 'Ditolak']);

        Mail::to($loan->user->email)->send(new LoanNotification($loan));

        return redirect()->back()->with('success', 'Peminjaman ditolak.');
    }

    public function returned(Loan $loan)
    {
        $loan->update(['status' => 'Dikembalikan']);
        return redirect()->back()->with('success', 'Peminjaman telah ditandai sebagai selesai.');
    }

    public function exportPdf(Request $request)
    {
        $status = $request->status;

        $query = Loan::with(['user', 'item'])->latest();

        if ($status && $status !== 'all') {
            $query->where('status', $status);
        }

        $loans = $query->get();

        Carbon::setLocale('id');

        $pdf = Pdf::loadView('admin.loans.pdf', [
            'loans' => $loans,
            'statusFilter' => $status,
        ])->setPaper('a4');

        return $pdf->stream('Laporan Peminjaman.pdf');
    }
}
