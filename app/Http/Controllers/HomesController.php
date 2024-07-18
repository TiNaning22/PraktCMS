<?php

namespace App\Http\Controllers;

use App\Models\Homes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreHomesRequest;
use App\Http\Requests\UpdateHomesRequest;
use Illuminate\Support\Facades\Log;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homes = Homes::all();
        return view('home', ['homes'=>$homes]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createmyhome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title_1'=>'required',
            'title_2'=>'required',
            'title_3'=>'required',
            'button_left'=>'required',
            'button_right'=>'required',
            'about_me_title'=>'required',
            'about_me_desc'=>'required',
            'img'=>'image|file',
        ]);

        if ($request->file('img')) {
            $validateData['img'] = $request->file('img')->store('home-images');
        }

        Homes::create($validateData);
        return redirect('/dashboardhome')->with('success', 'Berhasil Menambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Homes $homes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Homes $home)
    {
        return view('editmyhome', [
            'homes' => $home,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Homes $home)
    {
        $validatedData = $request->validate([
            'title_1'=>'required',
            'title_2'=>'required',
            'title_3'=>'required',
            'button_left'=>'required',
            'button_right'=>'required',
            'about_me_title'=>'required',
            'about_me_desc'=>'required',
            'img'=>'image|file',
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('home-images');
        }

        $home->update($validatedData);
        return redirect('/dashboardhome')->with('success', 'Berhasil Menambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Homes $home)
    {
        $home->delete();
        return redirect('/dashboardhome')->with('success', 'Berhasil Dihapus');
    }
}
