<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\Loan;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Item::count();
        $totalPeminjaman = Loan::count();
        $totalKategori = Category::count();
        $totalPengguna = User::where('role', 'user')->count();
        $totalBaik = Item::where('condition', 'Baik')->count();
        $totalRusak = Item::where('condition', 'Rusak')->count();

        return view('admin.dashboard', compact(
            'totalBaik',
            'totalRusak',
            'totalBarang',
            'totalKategori',
            'totalPengguna',
            'totalPeminjaman'
        ));
    }
}
