<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
