<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Results;

    class ProductController extends Controller
{
    
    public function formularioProviders(){

        return view('frm_producto');
    }


public function providersTipe(Request $request){

    // $producto = new Product();
    // $producto->name=$request->name;
    // $producto->price=$request->price;
    // $producto->save();
    // return $producto;
 }
}