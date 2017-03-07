<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class productocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        
        $nombre = request() ->get ('nombre'); 
        $precio = request() ->get ('precio');
        echo "Producto Registrado: " .$nombre." " . $precio;

    }
}