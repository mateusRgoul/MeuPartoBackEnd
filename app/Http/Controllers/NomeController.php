<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nome;

class NomeController extends Controller
{

    public function listar(){
        $pessoas = Nome::all();
        return response()->json($pessoas, 200);
    }

    public function cadastrar(Request $request){
        $pessoa = new Nome;
        $pessoa->nome = $request->nome;
        $pessoa->sobrenome = $request->sobrenome;
        $pessoa->email = $request->email;
        $pessoa->senha = $request->senha;
        $res = $pessoa->save();
        
        if($res) return response()->json(['Pessoa cadastrada com sucesso'], 201);
        else return response()->json(['Erro ao cadastrar pessoa'], 400);
    }

    public function atualizar(Request $request, $id){
        $pessoa = Nome::find($id);
        $pessoa->nome = $request->nome;
        $pessoa->sobrenome = $request->sobrenome;
        $pessoa->email = $request->email;
        $pessoa->senha = $request->senha;
        $res = $pessoa->save();
        
        if($res) return response()->json(['Pessoa atualizada com sucesso'], 200);
        else return response()->json(['Erro ao atualizar pessoa'], 400);
    }

    public function deletar($id){
        $pessoa = Nome::find($id);
        $res = $pessoa->delete();
        
        if($res) return response()->json(['Pessoa deletada com sucesso'], 200);
        else return response()->json(['Erro ao deletar pessoa'], 400);
    }

    public function buscar($id){
        $pessoa = Nome::find($id);
        return response()->json($pessoa, 200);
    }

}
