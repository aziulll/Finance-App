<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;


class ReceitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Receita $receita)
    {
        $receita = Receita::all();
        return $receita;
    }

    /**
     * Show the form for creating a new resource.
     */

    public function sum() 
    {
        $somaReceitas = Receita::sum('valor');
        return $somaReceitas;   
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detalhe' => 'required',
            'valor' => 'required'
        ]);
    
        return Receita::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Receita $receita)
    {
        return $receita;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receita $receita)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receita $receita)
    {
        $request->validate([
            'name' => 'required',
            'detalhes' => 'required',
            'valor' => 'required'
        ]);
    
        $receita->update($request->all());
    
        return $receita;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receita $receita)
    {
        $receita->delete();
        
        return response()->json(['message' => 'receita deleted successfully']);
    }
}
