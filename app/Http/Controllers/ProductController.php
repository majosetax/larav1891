<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

    class ProductController extends Controller
{
    

    public function index()
    {
        $productos = Product::orderBy('id','desc')->get();
        return view('product.listar',compact('productos'));
    }


    public function create(){

        return view('product.create');
    }


public function store(Request $request){
    $name=$request->input('name');
    $price=$request->input('price');
    $description=$request->input('description');
    $cantidad=$request->input('cantidad');
    $date_exp=$request->input('date_exp');

    Product::create([
        'name'=>$name,
        'price'=>$price,
        'description'=>$description,
        'cantidad'=>$cantidad,
        'date_exp'=>$date_exp
    ]);

    echo 'Guardado';
   
 }
}