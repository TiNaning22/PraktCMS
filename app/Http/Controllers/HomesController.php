<?php

namespace App\Http\Controllers;

use App\Models\Homes;
use App\Http\Requests\StoreHomesRequest;
use App\Http\Requests\UpdateHomesRequest;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHomesRequest $request)
    {
        //
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
    public function edit(Homes $homes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomesRequest $request, Homes $homes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Homes $homes)
    {
        //
    }
}
