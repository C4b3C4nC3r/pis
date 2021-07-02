<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    //methods multi
    public function index()
    {
        return view('x.index');  
    }
    public function create()
    {
        return view('x.create');   
    }
    public function show($x)
    {
        //other fun 
        //x('curso');//['x'=>$x]
        return view('x.show',compact('x'));   

    }
}
