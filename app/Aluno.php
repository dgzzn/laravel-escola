<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['nome', 'matricula', 'telefone','email', 'logradouro',
        'bairro', 'municipio', 'uf', 'complemento'];
}
