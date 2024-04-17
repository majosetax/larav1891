<?php

namespace App\Http\Controllers;

use App\Models\Cousin;
use Illuminate\Http\Request;

class CousinController extends Controller
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
        return view('frm_cousin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cousin = new Cousin();
        $num1 = $request->input('num1');
        
         $cont=0;
        for($k=1;$k<=$num1;$k++){
           
            if($num1%$k==0){
               $cont++;
            }
       
        }
       
        if($cont==2)
         {      Cousin::create([

            'num1'=>$num1,
            'primo'=>'Es primo',
          
        ]);
            echo 'Es un numero primo'.$num1;

                   
         }
        else{
            Cousin::create([

                'num1'=>$num1,
                'primo'=>'No es primo',
              
            ]);
            echo 'No es un numero primo'.$num1;
        }    
       
    }
   

    

    /**
     * Display the specified resource.
     */
    public function show(Cousin $cousin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cousin $cousin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cousin $cousin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cousin $cousin)
    {
        //
    }
}
