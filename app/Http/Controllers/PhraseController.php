<?php

namespace App\Http\Controllers;

use App\Models\Phrase;
use Illuminate\Http\Request;

class PhraseController extends Controller
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
        return view('frm_phrase');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $frase = $request->input('frase'); 
        echo strrev($frase);
        Phrase::create([
            'frase'=>$frase,
            'fraseInvertida'=>strrev($frase),   
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Phrase $phrase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phrase $phrase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phrase $phrase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phrase $phrase)
    {
        //
    }
}
