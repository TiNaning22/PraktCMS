<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard_product extends Model
{
    use HasFactory;
    protected $fillable = ['Nama_Barang', 'Kategori', 'Berat'];
}
