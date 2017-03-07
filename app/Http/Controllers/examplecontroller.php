<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class examplecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function mostrarMensaje()
    {
        return 'mensaje desde el controlador';
    }

    public function mostrarNombre($nombre)
    {
        return 'su nombre es: '.$nombre;
    }


}