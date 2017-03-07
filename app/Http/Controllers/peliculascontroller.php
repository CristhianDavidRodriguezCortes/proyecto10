<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\peliculas;

class peliculascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guardar()
    {
        $data = Request()->all();
        peliculas::create($data);
    }

         public function index()
    {
        $pelis = peliculas::all();
        return view('listar',compact('pelis'));
    }

         public function editar($id)
    {
        $pelis = peliculas::FindOrFail($id);
        return view('actualizar',compact('pelis'));
    }
    
         public function actualizar($id)
    {
        $pelis = peliculas::FindOrFail($id);
        $data = Request()->all();
        $pelis ->fill($data)->save();
        return redirect()->to('listar');
    }

       public function eliminar($id)
    {
        $pelis = peliculas::FindOrFail($id);
        $pelis ->delete();
        return redirect()->to('listar');
    }
    
}



