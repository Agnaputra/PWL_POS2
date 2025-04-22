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
            [
                'barang_id' => 1, // Sesuai ID di m_barang
                'user_id' => 1, // Sesuai ID di m_user
                'stok_tanggal' => now(),
                'stok_jumlah' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 2,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 3,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 4,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 5,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 6,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 7,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 8,
                'user_id' => 3,
                'stok_tanggal' => now(),
                'stok_jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 9,
                'user_id' => 2,
                'stok_tanggal' => now(),
                'stok_jumlah' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'barang_id' => 10,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
