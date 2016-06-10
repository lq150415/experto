<?php

namespace experto\Http\Controllers;

use Illuminate\Http\Request;
use experto\Paciente;
use experto\Http\Requests;

class DiagnosticoController extends Controller
{
    public function index()
    {
    	return view('evaluacionglobal');
    }
     public function index2($id)
    {
    	$paciente= Paciente::where('id','=',$id)->first();
    	return view('cribaje')->with('id',$id)->with('paciente',$paciente);
    }
}
