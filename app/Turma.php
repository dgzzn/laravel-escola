<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}