<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despesas;

class DespesaController extends Controller
{
    public function index(Despesas $despesa)
    {
        $despesa = Despesas::all(); 

        return response()->json($despesa);
        
    }

    /**
     * Show the form for creating a new resource.
     */

    public function sum() 
    {
        $somaDespesas = Despesas::sum('valor');
        return $somaDespesas;   
    }
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detalhe' => 'required',
            'valor' => 'required',
            'categoria' => 'required',
        ]);
    
        return Despesas::create($request->all());
    }

    
    public function show(Despesas $despesa)
    {
        return $despesa;
    }

   
   
}
