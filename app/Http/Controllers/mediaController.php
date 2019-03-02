<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mediaController extends Controller
{
    public function index(){
        return view('media');
    }
    public function calculo(Request $request){

        $nome = $request->nome;
        $media = ($request->nota1 + $request->nota2 + $request->nota3 + $request->nota4)/4;

        $valores = [
            'nome' => $nome,
            'media' => $media
        ];

        #return view('media.resultado',$valores);
        return view('media.resultado', compact('nome', 'media'));
    }
}
