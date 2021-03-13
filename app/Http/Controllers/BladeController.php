<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        return view('pages.home', ['name' => 'Kimin']);
    }
    public function about()
    {
        return view('pages.about', ['name' => 'Rizky Nurfauzi']);
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
