<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $primaryKey = 'funcionario_id';

    public $rules = [
        'nome' => 'required',
        'telefone' => 'required',
        'nascimento' => 'required',
        'cidade' => 'required'
    ];

    public $messages = [
        'nome.required' => 'Campo obrigatório!',
        'telefone.required' => 'Campo obrigatório!',
        'cidade.required' => 'Campo obrigatório!',
        'nascimento.required' => 'Campo obrigatório!'
    ];

    public function postoDeTrabalho()
    {
        return $this->belongsToMany('App\PostoDeTrabalho')->with('habilitacoes');
    }
}
