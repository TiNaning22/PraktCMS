<?php

namespace App\Http\Controllers;
use App\Models\Homes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardHomeController extends Controller
{
    public function index()
    {
        $homes = Homes::all();
        return view('dashboardhome', ['homes'=>$homes]);
    }
}
