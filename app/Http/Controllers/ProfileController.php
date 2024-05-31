<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
    
    public function edit(Profile $profile)
    {
        
    }
    
    
    
}
