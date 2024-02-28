<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id' => 3, 'pembeli' => 'Budi', 'penjualan_kode' => 'TRS001', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Ani', 'penjualan_kode' => 'TRS002', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Cindy', 'penjualan_kode' => 'TRS003', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Doni', 'penjualan_kode' => 'TRS004', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Eka', 'penjualan_kode' => 'TRS005', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Fani', 'penjualan_kode' => 'TRS006', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Galih', 'penjualan_kode' => 'TRS007', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Hani', 'penjualan_kode' => 'TRS008', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Indra', 'penjualan_kode' => 'TRS009', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'pembeli' => 'Joni', 'penjualan_kode' => 'TRS010', 'penjualan_tanggal' => Carbon::now()->subDays(rand(1, 30)), 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
