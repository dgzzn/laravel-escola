<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'professores';

    protected $fillable = ['nome', 'matricula','cpf','telefone', 'email', 'logradouro',
        'bairro', 'municipio', 'uf', 'complemento'];
}
