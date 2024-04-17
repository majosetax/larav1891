<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frm_results');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cuadratica = new Result();
        $a = $request->input('a');
        $b = $request->input('b');
        $c = $request->input('c');
        $p1=($b*$b)-(4*$a*$c);
       
        if($a!=0 && $p1>=0){
            $p2=sqrt($p1);
            $x1=(-$b+$p2)/2*$a;
            $x2=(-$b-$p2)/2*$a;

            Result::create([
                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'x1'=>$x1,
                'x2'=>$x2,
            ]);

         echo    'Resultado x1: '.$x1.' Resultado x2: '.$x2;

           }

        else{

            Result::create([

                'a'=>$a,
                'b'=>$b,
                'c'=>$c,
                'x1'=>0,
                'x2'=>0,
            ]);

            echo 'no es valido';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
