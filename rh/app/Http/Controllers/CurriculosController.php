<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculosController extends Controller
{
    //Lista curriculos cadastrados
    public function curriculos(){
        return view('curriculos.index');
    }

    //Formulario de cadastro de um novo curriculo
    public function novo(){
        return 'novo curriculo';
    }
}
