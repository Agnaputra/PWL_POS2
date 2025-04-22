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
                'kategori_id' => 1, // Sesuai kategori di tabel m_kategori
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Laptop Asus',
                'harga_beli' => 8000000,
                'harga_jual' => 9000000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Smartphone Samsung',
                'harga_beli' => 5000000,
                'harga_jual' => 5500000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Kaos Polos',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Jaket Hoodie',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Biskuit Roma',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Roti Tawar',
                'harga_beli' => 12000,
                'harga_jual' => 17000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Kopi Kapal Api',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Teh Kotak',
                'harga_beli' => 6000,
                'harga_jual' => 9000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Meja Kayu',
                'harga_beli' => 300000,
                'harga_jual' => 350000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Kursi Plastik',
                'harga_beli' => 50000,
                'harga_jual' => 70000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
