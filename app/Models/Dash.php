<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dash extends Model
{
    protected $guarded = ['id'];

    protected $table = 'dashboard_products';
}
