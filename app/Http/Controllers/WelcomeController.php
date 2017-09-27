<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('Welcome');
    }


    public function contact()
    {
        return 'What do you want me to help you man?';
    }

    
}