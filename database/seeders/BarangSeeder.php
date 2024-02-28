<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELE001',
                'barang_nama' => 'Printer',
                'harga_beli' => 2500000,
                'harga_jual' => 1200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'ELE002',
                'barang_nama' => 'Monitor',
                'harga_beli' => 2000000,
                'harga_jual' => 1200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PAK001',
                'barang_nama' => 'Baju',
                'harga_beli' => 150000,
                'harga_jual' => 90000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'PAK002',
                'barang_nama' => 'Celana',
                'harga_beli' => 90000,
                'harga_jual' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MAK001',
                'barang_nama' => 'Pisang',
                'harga_beli' => 15000,
                'harga_jual' => 9000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'MAK002',
                'barang_nama' => 'Nanas',
                'harga_beli' => 5000,
                'harga_jual' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'ATK001',
                'barang_nama' => 'Pensil',
                'harga_beli' => 2000,
                'harga_jual' => 1500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'ATK002',
                'barang_nama' => 'Pulpen',
                'harga_beli' => 3000,
                'harga_jual' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'PER001',
                'barang_nama' => 'Wajan',
                'harga_beli' => 100000,
                'harga_jual' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'PER002',
                'barang_nama' => 'Dispenser',
                'harga_beli' => 300000,
                'harga_jual' => 240000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
