<?php

namespace App\Http\Controllers;

use App\Models\dashboard_product;
use Illuminate\Http\Request;
use App\Models\DashboardProduct;
use Database\Seeders\dashproduct;
use Illuminate\Routing\Controller;

class DashboardProductController extends Controller
{
    public function index()
    {
        $product = DashboardProduct::all();
        return view('DashboardProduct', ['product'=>$product]);
    }

    public function create()
    {
        return view('createproduct');
    }

    public function store(Request $request)
    {
        return $request->file('image')->store('post-images');
        
        $validateData = $request->validate([
            'Nama_Barang'=>'required',
            'Kategori'=>'required',
            'Berat_Barang'=>'required'
        ]);

        DashboardProduct::create($validateData);
        return redirect('/dashboard/product')->with('success', 'Berhasil Menambahkan');

       
    }

    

    public function destroy(DashboardProduct $dashProduct)
    {
        DashboardProduct::destroy($dashProduct->id);
        return redirect('/dashboard/product')->with('success', 'Berhasil Dihapus');
    }


}
