<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    //Lista candidatos cadastrados
    public function candidatos(){
        return view('candidatos.index');
    }

    //Formulario de cadastro de um novo candidato
    public function novo(){
        return 'novo candidato';
    }
}
