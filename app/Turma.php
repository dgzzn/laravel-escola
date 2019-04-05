<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turma extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['disciplina_id', 'professor_id'];

    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }

    public function professor(){
        return $this->belongsTo('App\Professor');
    }
}
