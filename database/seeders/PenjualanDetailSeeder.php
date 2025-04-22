<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jumlahData = 30;
        $jumlahBarangPerTransaksi = 3;

        $penjualan = DB::table('t_penjualan')->pluck('penjualan_id');
        $barang = DB::table('m_barang')->pluck('barang_id');

        for ($i = 0; $i < $jumlahData; $i++) {
            // Pilih transaksi secara acak
            $penjualan_id = $penjualan->random();

            // Pilih 3 barang berbeda secara acak
            $barangDipilih = $barang->random($jumlahBarangPerTransaksi);

            foreach ($barangDipilih as $barang_id) {
                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'harga' => rand(5000, 50000), // Harga acak antara 5000 - 50000
                    'jumlah' => rand(1, 5), // Jumlah barang antara 1 - 5
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
