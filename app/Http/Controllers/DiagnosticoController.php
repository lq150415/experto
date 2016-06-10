<?php

namespace experto\Http\Controllers;

use Illuminate\Http\Request;
use experto\Paciente;
use experto\Diagnostico;
use experto\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
    public function store(Request $request,$id)
    {
    	$diagnostico= new Diagnostico;
    	$diagnostico->fecDia= Carbon::now();
    	$diagnostico->pesAct= $request->input('pesoactual');
    	$diagnostico->estatura= $request->input('estaturaactual');
    	$diagnostico->imc=($request->input('pesoactual')/(($request->input('estaturaactual'))*($request->input('estaturaactual'))));
    	$diagnostico->CodPas=$id;
    	$diagnostico->CodMed=Auth::user()->id;
    	
    	$diagnostico->save();
    		 if($diagnostico->id<10)
        {
        $diagnostico->CodDia= 'DIA-00'.$diagnostico->id;
        }elseif ($diagnostico->id<100){
            $diagnostico->CodDia= 'DIA-0'.$diagnostico->id;
        }elseif($diagnostico->id<1000){
            $diagnostico->CodDia= 'DIA-'.$diagnostico->id;

        }
    	$diagnostico->save(); 
    	if($diagnostico->imc<19){
    		$E=0;
    	}elseif($diagnostico->imc<21){
    		$E=1;
    	}elseif($diagnostico->imc<23){
    		$E=2;
    	}else{
    		$E=3;
    	}
    	$total=$request->input('opciones')+$request->input('opciones2')+$request->input('opciones3')+$request->input('opciones4')+$request->input('opciones5');
    	$c=$total+$E;
    	if($c<=14 && $c>=12){
    	 $mensaje="Estado nutricional: Normal";
    	}elseif($c>8){
    	 $mensaje="Estado nutricional: Riesgo de malnutricion";
    	}else{
    	 $mensaje="Estado nutricional: Malnutricion";
    	}
    	
        return view('resultado')->with('id',$id)->with('mensaje',$mensaje);    
    }
    public function resultado()
    {
    	return view('resultado');
    }
}
