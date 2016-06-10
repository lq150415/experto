<?php

namespace experto\Http\Controllers;

use Illuminate\Http\Request;
use experto\Paciente;
use experto\Http\Requests;

class PacienteController extends Controller
{
     public function index()
    {
    	$pacientes= Paciente::get();
    	return view('registropacientes')->with('pacientes',$pacientes);
    }

    public function store(Request $request)
    {
    	$pacientes= new Paciente;
    	$pacientes->NomPas=$request->input('nom_usu');
    	$pacientes->PatMat=$request->input('apa_usu');
    	$pacientes->MatPas=$request->input('ama_usu');
    	$pacientes->FecNacPas=$request->input('fec_nac');
    	$pacientes->CiPas=$request->input('ci_usu'); 
    	$pacientes->LugPas=$request->input('lug_usu'); 
    	$pacientes->SexPas=$request->input('sex_usu'); 
    	$pacientes->DirPas=$request->input('dir_usu'); 
    	$pacientes->TelPas=$request->input('tel_usu');   
    	$pacientes->save();
    	 if($pacientes->id<10)
        {
        $pacientes->CodPas= 'PAC-00'.$pacientes->id;
        }elseif ($pacientes->id<100){
            $pacientes->CodPas= 'PAC-0'.$pacientes->id;
        }elseif($pacientes->id<1000){
            $pacientes->CodPas= 'PAC-'.$pacientes->id;

        }
    	$pacientes->save(); 	
    	 $mensaje="Paciente registrado correctamente";
        return redirect()->route('pacientes')->with('mensaje',$mensaje);    	    	    	
    }
}
