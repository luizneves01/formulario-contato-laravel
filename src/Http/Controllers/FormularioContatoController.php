<?php

namespace LuizNeves01\FormularioContato\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use Felipe\FormularioContato\Model\FormularioContato;

class FormularioContatoController extends Controller {

    public function index()
    {
        return view('formulario-contato::contato');
    }

    public function enviarEmail()
    {

    }
}