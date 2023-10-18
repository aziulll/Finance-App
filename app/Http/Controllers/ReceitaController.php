<?php

namespace App\Http\Controllers;

use App\Models\Receita;
use Illuminate\Http\Request;


class ReceitaController extends Controller
{

    public function index(Receita $receita)
    {
        $receita = Receita::all();

        return response()->json($receita);
    }


    public function sum()
    {
        $somaReceitas = Receita::sum('valor');
        return $somaReceitas;
    }

    public function pesquisar(Request $request)
    {
        $termoDeBusca = $request->input('termo_de_busca');

        $receitas = Receita::where('name', 'like', "%$termoDeBusca%")->get();

        return response()->json($receitas);
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detalhe' => 'required',
            'valor' => 'required',
            'categoria' => 'required'
        ]);

        return Receita::create($request->all());
    }

    public function show($id)
    {
        $receita = Receita::find($id);

        if (!$receita) {
            return response()->json(['message' => 'Receita não encontrada'], 404);
        }

        return response()->json($receita);
    }
    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required',
            'detalhe' => 'required',
            'valor' => 'required',
            'categoria' => 'required',
        ]);

        // Encontre a receita pelo ID
        $receita = Receita::find($id);

        if (!$receita) {
            return response()->json(['message' => 'Receita não encontrada'], 404);
        }

        // Atualize os campos da receita
        $receita->name = $request->input('name');
        $receita->detalhe = $request->input('detalhe');
        $receita->valor = $request->input('valor');
        $receita->categoria = $request->input('categoria');

        // Salve as alterações no banco de dados
        $receita->save();

        return response()->json($receita);
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
