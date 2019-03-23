<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'professores';
}
