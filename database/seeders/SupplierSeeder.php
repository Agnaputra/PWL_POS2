<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            [
                'nama_supplier' => 'PT. Rejeki Indah',
                'email' => 'rejekiindah@example.com',
                'telepon' => '0812345623413',
                'alamat' => 'Jl. Kulintang No. 13, Malang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_supplier' => 'CV. Citra Indah',
                'email' => 'citraindah@example.com',
                'telepon' => '081987312567',
                'alamat' => 'Jl. Raya Soekarno No. 20, Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_supplier' => 'UD. Jaya Baru',
                'email' => 'jayabaru@example.com',
                'telepon' => '081189765873',
                'alamat' => 'Jl. Wijaya No. 15, Kediri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
