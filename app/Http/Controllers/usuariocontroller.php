<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class usuariocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usuario()
    {
        $nombre = request() ->get ('nombre'); 
        $apellido = request() ->get ('apellido');
        $edad = request() ->get ('edad');
        $genero = request() ->get ('genero');
        $correo = request() ->get ('correo');
        $ciudad = request() ->get ('ciudad');

        echo "Usuario Registrado: " .$nombre." " . $apellido." " . $edad." " . $genero." " . $correo." " . $ciudad;
    }
}