<?php

namespace App\Http\Controllers;

use App\Models\x_example;
use Illuminate\Http\Request;
use App\Http\Requests\StoreX;

class OtherController extends Controller
{
    //methods multi
    public function index()
    {
        //$x = x_example::all();//tardan mucho...
        $x = x_example::orderBy('id','desc')->paginate(); // x?page=3
        return view('x.index',compact('x'));  
    }
    public function create()
    {
        return view('x.create');   
    }
    public function store(StoreX $request)//el request siempre lleva todo
    {   
        
        $x = x_example::create($request->all());//method

        return redirect()->route('x.show',$x);//response
    }
    
    public function show(x_example $x)
    {
        return view('x.show',compact('x'));   
    }
    public function edit(x_example $x)
    {
        return view('x.update',compact('x'));
    }
    public function update(StoreX $request,x_example $x)
    {
        
        $x->update($request->all());//method
        
        return redirect()->route('x.show',$x);
    }
    public function destroy(x_example $x)
    {
        $x->delete();
        return redirect()->route('x.index');//response

    }
}
