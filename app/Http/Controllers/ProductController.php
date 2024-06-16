<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardProduct;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $product = DashboardProduct::all();
        return view('product', ['product'=>$product]);
    }
}
