<?php

namespace App\Http\Controllers;

use App\Funcionarios;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FuncionariosController extends Controller
{
    public function index(){
        return view('funcionarios.formulario');
    }

    public function addFuncionarioPost(Request $request)
    {
        $funcionario = new Funcionarios();

        $dados = $request->all();

        $validator = validator($dados, $funcionario->rules, $funcionario->messages);

        if($validator->fails()){
            return redirect()->route('/')->withErrors($validator);
        }

        $funcionario->nome = $request->nome;
        $funcionario->nascimento = $request->nascimento;
        $funcionario->cidade = $request->cidade;
        $funcionario->telefone = $request->telefone;

        $funcionario->save();

        return redirect('/')->with('success', 'Salvo com sucesso');
    }
}
