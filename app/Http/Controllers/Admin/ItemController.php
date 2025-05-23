<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('category')->get();
        return view('admin.items.index', compact('items'));
    }

    public function detail(Item $item)
    {
        return view('admin.items.detail', compact('item'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.items.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:50',
            'brand' => 'nullable|string|max:50',
            'origin' => 'nullable|string|max:100',
            'quantity' => 'required|integer',
            'type' => 'nullable|string|max:50',
            'acquired_date' => 'nullable|date',
            'price' => 'nullable|integer',
            'status' => 'required|in:Diproses,Diterima,Ditolak',
            'condition' => 'required|in:Baik,Rusak',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('items', 'public') : null;

        $item = Item::create([
            ...$request->except('image'),
            'image' => $imagePath,
            'qr_code' => Str::random(20),
        ]);

        return redirect()->route('admin.items.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit(Item $item)
    {
        $categories = Category::all();
        return view('admin.items.edit', compact('item', 'categories'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:50',
            'brand' => 'nullable|string|max:50',
            'origin' => 'nullable|string|max:100',
            'quantity' => 'required|integer',
            'type' => 'nullable|string|max:50',
            'acquired_date' => 'nullable|date',
            'price' => 'nullable|integer',
            'status' => 'required|in:Diproses,Diterima,Ditolak',
            'condition' => 'required|in:Baik,Rusak',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $item->image = $request->file('image')->store('items', 'public');
        }

        $item->update($request->except('image'));

        return redirect()->route('admin.items.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(Item $item)
    {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }

        $item->delete();
        return redirect()->route('admin.items.index')->with('success', 'Barang berhasil dihapus.');
    }

    public function exportPdf()
    {
        $items = Item::with('category')->get();

        Carbon::setLocale('id');

        $pdf = Pdf::loadView('admin.items.pdf', compact('items'))
            ->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Barang.pdf');
    }
}
