<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VagasController extends Controller
{
    //Lista vagas cadastradas
    public function vagas(){
        return view('vagas.index');
    }

    //Formulario de cadastro de uma nova vaga
    public function novo(){
        return 'nova vaga';
    }
}
