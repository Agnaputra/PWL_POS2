<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1, // Sesuai ID di m_user
                'pembeli' => 'Andi',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Citra',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Dedi',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Eka',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Fajar',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Gina',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 2,
                'pembeli' => 'Haris',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Indra',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => now(),
            ],
            [
                'user_id' => 1,
                'pembeli' => 'Joko',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
