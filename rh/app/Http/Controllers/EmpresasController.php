<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    //Lista empresas cadastradas
    public function empresas(){
        return view('empresas.index');
    }

    //Formulario de cadastro de uma nova empresa
    public function novo(){
        return 'nova empresa';
    }
}
