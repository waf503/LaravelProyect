<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index(){
       echo "Bienvenido a la pagina principal"; 
    }

    public function create(){
        echo "Aquí puedes crear un curso";
    }

    public function show($curso="MiCurso"){
        echo "El curso es: $curso";
    }
}
