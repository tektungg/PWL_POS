<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 2, 'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 30, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 3, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 4, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 80, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 5, 'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 200, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 6, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 7, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 300, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 8, 'user_id' => 2, 'stok_tanggal' => now(), 'stok_jumlah' => 250, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 9, 'user_id' => 3, 'stok_tanggal' => now(), 'stok_jumlah' => 70, 'created_at' => now(), 'updated_at' => now()],
            ['barang_id' => 10, 'user_id' => 1, 'stok_tanggal' => now(), 'stok_jumlah' => 120, 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('t_stok')->insert($data);
    }
}
