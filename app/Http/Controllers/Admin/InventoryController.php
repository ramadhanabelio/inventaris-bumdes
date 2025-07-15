<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();
        return view('admin.inventories.index', compact('inventories'));
    }

    public function create()
    {
        return view('admin.inventories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'category' => 'nullable|string|max:50',
            'unit' => 'nullable|string|max:100',
            'price' => 'required|integer',
        ]);

        Inventory::create($request->all());

        return redirect()->route('admin.inventories.index')->with('success', 'Inventaris berhasil ditambahkan.');
    }

    public function edit(Inventory $inventory)
    {
        return view('admin.inventories.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'category' => 'nullable|string|max:50',
            'unit' => 'nullable|string|max:100',
            'price' => 'required|integer',
        ]);

        $inventory->update($request->all());

        return redirect()->route('admin.inventories.index')->with('success', 'Inventaris berhasil diperbarui.');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('admin.inventories.index')->with('success', 'Inventaris berhasil dihapus.');
    }

    public function exportPdf()
    {
        $inventories = Inventory::all();
        Carbon::setLocale('id');

        $pdf = Pdf::loadView('admin.inventories.pdf', compact('inventories'))
            ->setPaper('a4', 'portrait');

        return $pdf->stream('Laporan Inventaris.pdf');
    }
}
