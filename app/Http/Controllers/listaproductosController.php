<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lista;

class listaempleadoController extends Controller
{
    public function index()
    {
    	return view ('productosView');
    }
}
