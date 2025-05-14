<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\Loan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalItems = Item::count();
        $totalPeminjaman = Loan::count();
        $totalRusak = Item::where('condition', 'Rusak')->count();
        $totalTakTerpakai = Item::where('status', 'Ditolak')->count();

        return view('admin.dashboard', compact(
            'totalItems',
            'totalRusak',
            'totalPeminjaman',
            'totalTakTerpakai',
        ));
    }
}
