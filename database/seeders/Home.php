<?php

namespace Database\Seeders;

use App\Models\Home as ModelsHome;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Home extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            'title' => 'Welcome',
            'body' => 'lorem ipsum',
        ]);
    }
}
