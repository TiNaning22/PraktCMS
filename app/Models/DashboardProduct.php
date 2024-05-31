<?php

namespace App\Models;

use Database\Seeders\dashproduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardProduct extends Model
{
    use HasFactory;
    // public function index()
    // {
    //     return DashboardProduct::all();
    // }
    protected $fillable = ['Nama_Barang', 'Kategori', 'Berat_Barang'];

    // protected $table = 'dashboard_products';
}
