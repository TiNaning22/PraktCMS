<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dashproduct extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dashboard_products')->insert([
            'Nama_Barang'=>'Pupuk',
            'Kategori'=>'Berat',
            'Berat_Barang'=>'50ton'
        ]);
    }
}
