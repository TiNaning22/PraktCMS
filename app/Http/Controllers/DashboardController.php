<?php

namespace App\Http\Controllers;

use App\Models\DashboardProduct;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = DashboardProduct::all();
        return view('DashboardProduct', ['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'Nama_Barang'=>'required',
            'Kategori'=>'required',
            'Berat_Barang'=>'required'
        ]);

        DashboardProduct::create($validateData);
        return redirect('/dashboard/product')->with('success', 'Berhasil Menambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardProduct $dashboardProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardProduct $product)
    {
        return view('editproduct', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DashboardProduct $product)
    {
        $validatedData = $request->validate([
            'Nama_Barang' => 'required',
            'Kategori' => 'required',
            'Berat_Barang' => 'required'
        ]);

        $product->update($validatedData);

        return redirect('/dashboard/product')->with('success', 'Produk berhasil diupdate');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardProduct $product)
    {
        $product->delete();
        return redirect('/dashboard/product')->with('success', 'Berhasil Dihapus');
    }
}
