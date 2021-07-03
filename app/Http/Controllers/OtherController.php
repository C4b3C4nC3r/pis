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
    public function store(StoreX $request)
    {   

        $x= new x_example();
        $x->name = $request->name;
        $x->descripcion = $request->descripcion;
        $x->categoria = $request->categoria;

        $x->save();
        
        return redirect()->route('x.show',$x);
    }
    
    public function show(x_example $x)
    {
        return view('x.show',compact('x'));   
    }
    public function update(x_example $x)
    {
        return view('x.update',compact('x'));
    }
    public function editado(StoreX $request,x_example $x)
    {
        
        $x->name=$request->name;
        $x->descripcion=$request->descripcion;
        $x->categoria=$request->categoria;
        $x->save();
        
        return redirect()->route('x.show',$x);
    }
}
