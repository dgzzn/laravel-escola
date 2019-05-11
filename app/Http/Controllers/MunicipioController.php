<?php

namespace App\Http\Controllers;

use App\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function recuperarPorUF($uf)
    {
        return Municipio::where('uf_id', $uf)->get();
    }
}
