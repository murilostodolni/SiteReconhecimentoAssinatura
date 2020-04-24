<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'associated_file', 'finished', 'qtd_votes', 'qtd_acertos', 'qtd_erros',
        'reloaded_flag', 'uf', 'atuacao', 'idade', 'sexo', 'escolaridade', 'disciplina', 'abordagem', 'formacao',
        'area', 'tempo', 'setor', 'experiencia'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
