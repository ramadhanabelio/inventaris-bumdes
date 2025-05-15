<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\Loan;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalItems = Item::count();
        $totalPeminjaman = Loan::count();
        $totalRusak = Item::where('condition', 'Rusak')->count();
        $totalBaik = Item::where('condition', 'Baik')->count();
        $totalTakTerpakai = Item::where('status', 'Ditolak')->count();

        return view('admin.dashboard', compact(
            'totalItems',
            'totalRusak',
            'totalBaik',
            'totalPeminjaman',
            'totalTakTerpakai'
        ));
    }
}
