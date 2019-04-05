<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disciplina extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nome','curso_id'];

    public function curso() {
        return $this->belongsTo('App\Curso');
    }

    public function professor(){
        return $this->belongsTo('App\Professor');
    }
}
