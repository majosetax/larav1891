<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
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
        return view('frm_friend');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        $divisores1=array();
        $divisores2=array();

        for($k=1;$k<$num1;$k++){

            if($num1%$k==0){
                $divisores1[] = $k;  
            }
        }
       
        $acu1=0;
        foreach ($divisores1 as $divisor1) {
            $acu1+=$divisor1;
        }

        for($k=1;$k<$num2;$k++){
            if($num2%$k==0){
                $divisores2[] = $k;  
            }
        }

        $acu2=0;

        foreach ($divisores2 as $divisor2) {
            $acu2+=$divisor2;
        } 
        if($acu1==$num2 && $acu2==$num1){
            Friend::create([
            'num1'=>$num1,
            'num2'=>$num2,
            'result'=>'Son amigos',
            ]);
            
            echo 'Los numeros '.$num1.' y '.$num2.' son amigos'; 
        }
        else{
            Friend::create([
            'num1'=>$num1,
            'num2'=>$num2,
            'result'=>'No son amigos',
            ]);
            echo 'Los numeros '.$num1.' y '.$num2.' no son amigos';
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Friend $friend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Friend $friend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Friend $friend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Friend $friend)
    {
        //
    }
}
