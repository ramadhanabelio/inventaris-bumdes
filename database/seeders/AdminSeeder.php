<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'BUMDes Sumber Rezeki',
            'username' => 'adminsumberrezeki',
            'email' => 'admin@bumdes.sumberrezeki.desa.id',
            'password' => Hash::make('rezeki@2025'),
            'phone_number' => '081234567890',
            'address' => 'Desa Bantan Sari',
            'role' => 'admin',
        ]);
    }
}
