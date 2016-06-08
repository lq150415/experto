<?php

namespace experto\Http\Controllers;

use Illuminate\Http\Request;

use experto\Http\Requests;

class DiagnosticoController extends Controller
{
    public function index()
    {
    	return view('evaluacionglobal');
    }
     public function index2()
    {
    	return view('cribaje');
    }
}
