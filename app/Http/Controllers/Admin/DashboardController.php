<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalItems = Item::count();
        $totalRusak = Item::where('condition', 'Rusak')->count();
        $totalTakTerpakai = Item::where('status', 'Ditolak')->count();

        $grafikData = [
            ['label' => 'Jan', 'masuk' => 20, 'keluar' => 10],
            ['label' => 'Feb', 'masuk' => 15, 'keluar' => 5],
            ['label' => 'Mar', 'masuk' => 30, 'keluar' => 25],
        ];

        return view('admin.dashboard', compact(
            'totalItems',
            'totalRusak',
            'totalTakTerpakai',
            'grafikData'
        ));
    }
}
