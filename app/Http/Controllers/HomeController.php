<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //methods singular route
    public function __invoke()
    {
        return view('home');   
    }
}
