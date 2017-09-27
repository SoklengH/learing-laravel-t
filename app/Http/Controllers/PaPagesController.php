<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaPagesController extends Controller
{
    public function about()
    {
        // $name = 'Sokleng Heang';
        // return view('pages.about')->with('name', $name);

        $people = [
            'Taylor Otwell', 'Dayle Rees', 'Eric Barnes'
        ];

        return view('pages.about', compact('people'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
