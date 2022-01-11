<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    //
    public function index($nom='Samuel')
    {
        return view('misVistas.demoView', ['nombre'=>$nom]);      
    }
}
