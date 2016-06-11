<?php

namespace experto\Http\Controllers;

use Illuminate\Http\Request;
use experto\Paciente;
use experto\Diagnostico;
use experto\Http\Requests;
use Carbon\Carbon;
use PDF;
use TCPDF;
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

    public function pdfobesidad(Request $request,$id)
    {
    	$pdf = new TCPDF('P','mm','LETTER', true, 'UTF-8', false);
        $pdf->SetTitle('Dieta para la obesidad');  
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(TRUE, 10);
        $pdf->SetMargins(15, 15, 10);
        $pdf->AddPage();
        $pdf->Image('assets/img/logo.jpg', 13, 15, 40, 18, 'JPG', '', '', true, 250, '', false, false, false, false, false, false);
        $pdf->Line ( 59, 25,205,25,array('width' => 0.3,'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->SetFont('','B','11');
        $pdf->SetXY(135, 20);
        $pdf->Write(0,'Dieta para la obesidad - Salud y vida','','',false);
        $pdf->SetXY(93, 25);
        $usuario = 'Nombre: '.Auth::user()->NomMed.' '.Auth::user()->PatMed.' '.Auth::user()->MadMed.' FECHA: '.Carbon::now();
        $pdf->Write(0,'Universidad Privada Franz Tamayo - Ingenieria en sistemas','','',false); 
        $pdf->SetXY(70,30);
        $pdf->SetFont('','','11');
        $pdf->write2DBarcode ( $usuario, 'QRCODE,M', 185, 35, 15, 15, '','','');
        $pdf->SetFont('','B','12');
        $pdf->SetXY(80, 40);
        $pdf->Write(0,'DIETA PARA BAJAR DE PESO','','',false);
        $paciente=Paciente::where('id','=',$id)->first();
        $pdf->SetFont('','B','11');        
        $pdf->SetXY(15, 55);
        $pdf->Write(0,'DATOS PERSONALES','','',false);
        $pdf->SetXY(19, 62);
         $pdf->SetFont('','','10');   
        $pdf->Write(0,'Paciente : '.$paciente->NomPas.' '.$paciente->PatMat.' '.$paciente->MatPas,'','',false);
        $diagnostico=Diagnostico::where('CodPas','=',$id)->orderBy('fecDia','DESC')->first();
        $pdf->SetXY(19, 69);
        $pdf->Write(0,'Talla : '.$diagnostico->estatura.' m','','',false);
        $pdf->SetXY(19, 76);
        $pdf->Write(0,'Peso : '.$diagnostico->pesAct.' Kg','','',false);
        $edad = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('Y'); 
      	$edad2 = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('m');
      	$edad3 = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('d');
      
       $date = \Carbon\Carbon::createFromDate($edad,$edad3,$edad2)->age;
        $pdf->SetXY(19, 83);
        $pdf->Write(0,'Edad : '.$date.' años','','',false);
        $pdf->SetXY(19, 90);
        $pdf->Write(0,'Sexo : '.$paciente->SexPas,'','',false);
        $pdf->SetXY(19, 97);
        $pdf->Write(0,'IMC : '.round(($diagnostico->pesAct)/(($diagnostico->estatura)*($diagnostico->estatura)),2),'','',false);
        $pdf->SetXY(19, 104);
        $pdf->Write(0,'Peso Ideal: '.round(($diagnostico->estatura)*($diagnostico->estatura)*23,2).' Kg','','',false);
        $pdf->Image('assets/img/dieta1.jpg', 30, 115, 160, 150, 'JPG', '', '', true, 250, '', false, false, false, false, false, false);
        
        $pdf->Image('assets/img/dieta2.jpg', 30, 325, 160, 150, 'JPG', '', '', true, 250, '', false, false, false, false, false, false);
        $pdf->Output('reportekardex.pdf');
    }

 public function pdfdesnutricion(Request $request,$id)
    {
    	$pdf = new TCPDF('P','mm','LETTER', true, 'UTF-8', false);
        $pdf->SetTitle('Dieta para la desnutricion');  
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(TRUE, 10);
        $pdf->SetMargins(15, 15, 10);
        $pdf->AddPage();
        $pdf->Image('assets/img/logo.jpg', 13, 15, 40, 18, 'JPG', '', '', true, 250, '', false, false, false, false, false, false);
        $pdf->Line ( 59, 25,205,25,array('width' => 0.3,'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->SetFont('','B','11');
        $pdf->SetXY(130, 20);
        $pdf->Write(0,'Dieta para la desnutricion - Salud y vida','','',false);
        $pdf->SetXY(93, 25);
        $usuario = 'Nombre: '.Auth::user()->NomMed.' '.Auth::user()->PatMed.' '.Auth::user()->MadMed.' FECHA: '.Carbon::now();
        $pdf->Write(0,'Universidad Privada Franz Tamayo - Ingenieria en sistemas','','',false); 
        $pdf->SetXY(70,30);
        $pdf->SetFont('','','11');
        $pdf->write2DBarcode ( $usuario, 'QRCODE,M', 185, 35, 15, 15, '','','');
        $pdf->SetFont('','B','12');
        $pdf->SetXY(80, 40);
        $pdf->Write(0,'DIETA PARA SUBIR DE PESO','','',false);
        $paciente=Paciente::where('id','=',$id)->first();
        $pdf->SetFont('','B','11');        
        $pdf->SetXY(15, 55);
        $pdf->Write(0,'DATOS PERSONALES','','',false);
        $pdf->SetXY(19, 62);
         $pdf->SetFont('','','10');   
        $pdf->Write(0,'Paciente : '.$paciente->NomPas.' '.$paciente->PatMat.' '.$paciente->MatPas,'','',false);
        $diagnostico=Diagnostico::where('CodPas','=',$id)->orderBy('fecDia','DESC')->first();
        $pdf->SetXY(19, 69);
        $pdf->Write(0,'Talla : '.$diagnostico->estatura.' m','','',false);
        $pdf->SetXY(19, 76);
        $pdf->Write(0,'Peso : '.$diagnostico->pesAct.' Kg','','',false);
        $edad = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('Y'); 
      	$edad2 = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('m');
      	$edad3 = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('d');
      
       $date = \Carbon\Carbon::createFromDate($edad,$edad3,$edad2)->age;
        $pdf->SetXY(19, 83);
        $pdf->Write(0,'Edad : '.$date.' años','','',false);
        $pdf->SetXY(19, 90);
        $pdf->Write(0,'Sexo : '.$paciente->SexPas,'','',false);
        $pdf->SetXY(19, 97);
        $pdf->Write(0,'IMC : '.round(($diagnostico->pesAct)/(($diagnostico->estatura)*($diagnostico->estatura)),2),'','',false);
        $pdf->SetXY(19, 104);
        $pdf->Write(0,'Peso Ideal: '.round(($diagnostico->estatura)*($diagnostico->estatura)*23,2).' Kg','','',false);
        $pdf->Image('assets/img/dieta1.jpg', 30, 115, 160, 150, 'JPG', '', '', true, 250, '', false, false, false, false, false, false);
        
        $pdf->Image('assets/img/dieta2.jpg', 30, 325, 160, 150, 'JPG', '', '', true, 250, '', false, false, false, false, false, false);
        $pdf->Output('reportekardex.pdf');
    }

     public function pdfnormal(Request $request,$id)
    {
    	$pdf = new TCPDF('P','mm','LETTER', true, 'UTF-8', false);
        $pdf->SetTitle('Recomendaciones');  
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetAutoPageBreak(TRUE, 10);
        $pdf->SetMargins(15, 15, 10);
        $pdf->AddPage();
        $pdf->Image('assets/img/logo.jpg', 13, 15, 40, 18, 'JPG', '', '', true, 250, '', false, false, false, false, false, false);
        $pdf->Line ( 59, 25,205,25,array('width' => 0.3,'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
        $pdf->SetFont('','B','11');
        $pdf->SetXY(142, 20);
        $pdf->Write(0,'Recomendaciones - Salud y vida','','',false);
        $pdf->SetXY(93, 25);
        $usuario = 'Nombre: '.Auth::user()->NomMed.' '.Auth::user()->PatMed.' '.Auth::user()->MadMed.' FECHA: '.Carbon::now();
        $pdf->Write(0,'Universidad Privada Franz Tamayo - Ingenieria en sistemas','','',false); 
        $pdf->SetXY(70,30);
        $pdf->SetFont('','','11');
        $pdf->write2DBarcode ( $usuario, 'QRCODE,M', 185, 35, 15, 15, '','','');
        $pdf->SetFont('','B','12');
        $pdf->SetXY(60, 40);
        $pdf->Write(0,'RECOMENDACIONES PARA UNA BUENA SALUD','','',false);
        $paciente=Paciente::where('id','=',$id)->first();
        $pdf->SetFont('','B','11');        
        $pdf->SetXY(15, 55);
        $pdf->Write(0,'DATOS PERSONALES','','',false);
        $pdf->SetXY(19, 62);
         $pdf->SetFont('','','10');   
        $pdf->Write(0,'Paciente : '.$paciente->NomPas.' '.$paciente->PatMat.' '.$paciente->MatPas,'','',false);
        $diagnostico=Diagnostico::where('CodPas','=',$id)->orderBy('fecDia','DESC')->first();
        $pdf->SetXY(19, 69);
        $pdf->Write(0,'Talla : '.$diagnostico->estatura.' m','','',false);
        $pdf->SetXY(19, 76);
        $pdf->Write(0,'Peso : '.$diagnostico->pesAct.' Kg','','',false);
        $edad = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('Y'); 
      	$edad2 = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('m');
      	$edad3 = Carbon::createFromFormat('Y-m-d', $paciente->FecNacPas)->format('d');
      
       $date = \Carbon\Carbon::createFromDate($edad,$edad3,$edad2)->age;
        $pdf->SetXY(19, 83);
        $pdf->Write(0,'Edad : '.$date.' años','','',false);
        $pdf->SetXY(19, 90);
        $pdf->Write(0,'Sexo : '.$paciente->SexPas,'','',false);
        $pdf->SetXY(19, 97);
        $pdf->Write(0,'IMC : '.round(($diagnostico->pesAct)/(($diagnostico->estatura)*($diagnostico->estatura)),2),'','',false);
        $pdf->SetXY(19, 104);
        $pdf->Write(0,'Peso Ideal: '.round(($diagnostico->estatura)*($diagnostico->estatura)*23,2).' Kg','','',false);
        $pdf->Image('assets/img/dieta4.jpg', 10, 115, 180, 150, 'JPG', '', '', true, 250, '', false, false, false, false, false, false);
        
        
        $pdf->Output('reportekardex.pdf');
    }
    public function resultado()
    {
    	return view('resultado');
    }
}
