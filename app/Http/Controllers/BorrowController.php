<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Loan;
use Illuminate\Http\Request;
use App\Mail\LoanNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BorrowController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function assets()
    {
        $items = Item::all();
        return view('asset', compact('items'));
    }

    public function history()
    {
        $user = Auth::user();
        $loans = Loan::where('user_id', $user->id)->with('item')->get();
        return view('history', compact('loans'));
    }

    public function create()
    {
        $items = Item::all();
        return view('loan', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:items,id',
            'borrowed_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:borrowed_date',
        ]);

        $loan = new Loan();
        $loan->user_id = Auth::id();
        $loan->item_id = $request->item_id;
        $loan->borrowed_date = $request->borrowed_date;
        $loan->return_date = $request->return_date;
        $loan->status = 'Dipinjam';
        $loan->save();

        Mail::to(Auth::user()->email)->send(new LoanNotification($loan));

        return redirect()->route('borrow.history')->with('success', 'Peminjaman berhasil diajukan.');
    }
}
