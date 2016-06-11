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
    public function index($id)
    {
    	return view('evaluacionglobal')->with('id',$id);
    }
     public function index2($id)
    {
    	$paciente= Paciente::where('id','=',$id)->first();
    	return view('cribaje')->with('id',$id)->with('paciente',$paciente);
    }
    public function index3($id)
    {
        $paciente= Paciente::where('id','=',$id)->first();
        return view('imc')->with('id',$id)->with('paciente',$paciente);
    }
    public function index4($id)
    {
        $paciente= Paciente::where('id','=',$id)->first();
        return view('circunferencial')->with('id',$id)->with('paciente',$paciente);
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
    	$paciente= Paciente::where('id','=',$id)->first();
        $imc=$diagnostico->imc;

        $edad = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('Y'); 
        $edad2 = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('m');
        $edad3 = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('d');
        $date = \Carbon\Carbon::createFromDate($edad,$edad3,$edad2)->age;

        if($date<=25){
            if($imc<23){
                $mensaje2='Desnutricion';
        }elseif($imc<=27.9){
            $mensaje2='Normal';
        }elseif($imc<30){
            $mensaje2='Sobrepeso';
        }else{
            $mensaje2='Obesidad';
        }
        }elseif($paciente->SexPas=='Masculino'){
            if($imc<18.66){
                $mensaje2='Desnutricion';
            }elseif ($imc<20.21) {
                $mensaje2='Riesgo de Desnutricion';
            }elseif($imc<=26.87){
                $mensaje2='Normal';
            }elseif($imc<31.26){
                $mensaje2='Sobrepeso';
            }else{
                $mensaje2='Obesidad';
            }
        }elseif($imc<17.38){
            $mensaje2='Desnutricion';
        }elseif($imc<18.64){
            $mensaje2='Riesgo de Desnutricion';
        }elseif($imc<26.14){
            $mensaje2='Normal';
        }elseif($imc<31.20){
            $mensaje2='Sobrepeso';
        }else{
            $mensaje2='Obesidad';
        }

        return view('resultado')->with('id',$id)->with('mensaje',$mensaje)->with('mensaje2',$mensaje2)->with('paciente',$paciente)->with('imc',$imc)->with('diagnostico',$diagnostico);    
    }
    public function imc(Request $request,$id)
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
       
        $paciente= Paciente::where('id','=',$id)->first();
        $imc=$diagnostico->imc;

        $edad = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('Y'); 
        $edad2 = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('m');
        $edad3 = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('d');
        $date = \Carbon\Carbon::createFromDate($edad,$edad3,$edad2)->age;

        if($date<=25){
            if($imc<23){
                $mensaje2='Desnutricion';
        }elseif($imc<=27.9){
            $mensaje2='Normal';
        }elseif($imc<30){
            $mensaje2='Sobrepeso';
        }else{
            $mensaje2='Obesidad';
        }
        }elseif($paciente->SexPas=='Masculino'){
            if($imc<18.66){
                $mensaje2='Desnutricion';
            }elseif ($imc<20.21) {
                $mensaje2='Riesgo de Desnutricion';
            }elseif($imc<=26.87){
                $mensaje2='Normal';
            }elseif($imc<31.26){
                $mensaje2='Sobrepeso';
            }else{
                $mensaje2='Obesidad';
            }
        }elseif($imc<17.38){
            $mensaje2='Desnutricion';
        }elseif($imc<18.64){
            $mensaje2='Riesgo de Desnutricion';
        }elseif($imc<26.14){
            $mensaje2='Normal';
        }elseif($imc<31.20){
            $mensaje2='Sobrepeso';
        }else{
            $mensaje2='Obesidad';
        }

        return view('resultadoimc')->with('id',$id)->with('mensaje2',$mensaje2)->with('paciente',$paciente)->with('imc',$imc)->with('diagnostico',$diagnostico);    
    }

    public function evaluacionglobal(Request $request,$id)
    {
        $diagnostico= new Diagnostico;
        $diagnostico->fecDia= Carbon::now();
        $diagnostico->pesAct= $request->input('peso');
        $diagnostico->estatura= $request->input('estatura');
        $diagnostico->imc=($request->input('peso')/(($request->input('estatura'))*($request->input('estatura'))));
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
        if($request->input('CMB')<21){
            $CMB=0;
        }elseif($request->input('CMB')<=22){
            $CMB=1;
        }else{
            $CMB=2;
        }
$total=$request->input('opciones')+$request->input('opciones2')+$request->input('opciones3')+$request->input('opciones4')+$request->input('opciones5')+$request->input('opciones6')+$request->input('opciones7')+$request->input('opciones8')+$request->input('opciones9')+$request->input('opciones10')+$request->input('opciones11')+$request->input('opciones12');
        $c=$total+$E+$CMB;
        if($c<=28 && $c>=22){
         $mensaje="Estado nutricional: Normal";
        }elseif($c<=21 && $c>16){
         $mensaje="Estado nutricional: Riesgo de malnutricion";
        }else{
         $mensaje="Estado nutricional: Malnutricion";
        }
        $paciente= Paciente::where('id','=',$id)->first();
        $imc=$diagnostico->imc;
        $edad = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('Y'); 
        $edad2 = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('m');
        $edad3 = \Carbon\Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('d');
        $date = \Carbon\Carbon::createFromDate($edad,$edad3,$edad2)->age;

        if($date<=25){
            if($imc<23){
                $mensaje2='Desnutricion';
        }elseif($imc<=27.9){
            $mensaje2='Normal';
        }elseif($imc<30){
            $mensaje2='Sobrepeso';
        }else{
            $mensaje2='Obesidad';
        }
        }elseif($paciente->SexPas=='Masculino'){
            if($imc<18.66){
                $mensaje2='Desnutricion';
            }elseif ($imc<20.21) {
                $mensaje2='Riesgo de Desnutricion';
            }elseif($imc<=26.87){
                $mensaje2='Normal';
            }elseif($imc<31.26){
                $mensaje2='Sobrepeso';
            }else{
                $mensaje2='Obesidad';
            }
        }elseif($imc<17.38){
            $mensaje2='Desnutricion';
        }elseif($imc<18.64){
            $mensaje2='Riesgo de Desnutricion';
        }elseif($imc<26.14){
            $mensaje2='Normal';
        }elseif($imc<31.20){
            $mensaje2='Sobrepeso';
        }else{
            $mensaje2='Obesidad';
        }

    return view('resultadoglobal')->with('id',$id)->with('mensaje',$mensaje)->with('mensaje2',$mensaje2)->with('paciente',$paciente)->with('imc',$imc)->with('diagnostico',$diagnostico);    
    }

    public function circunferencial(Request $request,$id){
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
        $paciente= Paciente::where('id','=',$id)->first();
        $imc=$diagnostico->imc;

        if($paciente->SexPas=='Masculino'){
            if($imc<18.5){
                if($request->input('CB')<25){
                    $mensaje2='Desnutricion';
                }else{
                    $mensaje2='Delgado';
                }
            }elseif($imc<24.9){
                $mensaje2='Normal';
            }elseif($imc<26.9){
                if($request->input('cc')<94){
                    if(($request->input('ccc'))/($request->input('cc'))<0.8){
                        $mensaje2='Sobrepeso no riesgoso';
                    }else{
                        $mensaje2='Sobrepeso riesgoso';
                    }
                }else{
                    $mensaje2='Sobrepeso riesgoso';
                }
            }else{
                $mensaje2='Obesidad';
            }
        }else{
            if($imc<18.5){
                if($request->input('CB')<26){
                    $mensaje2='Desnutricion';
                }else{
                    $mensaje2='Delgado';
                }
            }elseif($imc<24.9){
                $mensaje2='Normal';
            }elseif($imc<26.9){
                if($request->input('cc')<80){
                    if(($request->input('ccc'))/($request->input('cc'))<0.8){
                        $mensaje2='Sobrepeso no riesgoso';
                    }else{
                        $mensaje2='Sobrepeso riesgoso';
                    }
                }else{
                    $mensaje2='Sobrepeso riesgoso';
                }
            }else{
                $mensaje2='Obesidad';
            }
        }
 return view('resultadocircunferencial')->with('id',$id)->with('mensaje2',$mensaje2)->with('paciente',$paciente)->with('imc',$imc)->with('diagnostico',$diagnostico); 
    }
    public function resultado()
    {
    	return view('resultado');
    }
}
