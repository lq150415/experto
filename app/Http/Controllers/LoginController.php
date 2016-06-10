<?php

namespace experto\Http\Controllers;

use Illuminate\Http\Request;
use experto\Medico;
use experto\Paciente;
use Validator;
use experto\Http\Requests;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }
    public function index2()
    {
    	return view('principal');
    }
   
    public function index4($id)
    {
        $perfil= Paciente::where('id','=',$id)->first();
    	return view('perfil-diagnostico')->with('id',$id)->with('perfil',$perfil);
    }
    public function registro(Request $request)
    {
         $messages = array(
            'usumed.unique' => '¡Ese nick ya esta en uso, por favor utiliza otro!',
            'nommed.required'=>'El nombre es requerido',
            'patmed.required'=>'El apellido paterno es requerido',
            'madmed.required'=>'El apellido materno es requerido',
            'usumed.required'=>'El nick es requerido',
            'fecnacmed.required'=>'Seleccione una fecha',
            'password.required'=>'El password es requerido',
            'alpha',
            'nommed.alpha'=>'El nombre solo debe tener letras',
            'patmed.alpha'=>'El apellido paterno solo debe tener letras',
            'madmed.alpha'=>'El apellido materno solo debe tener letras',
           
         );
         $validator = Validator::make($request->all(), [
            'nommed' => 'required|alpha',
            'patmed' => 'required|alpha',
            'madmed' => 'required|alpha',
            'usumed' => 'required|unique:medico',
            'cimed' => 'required|alpha',
            'pas_usu' => 'required', 
        ],$messages);
        

         $request->flash();
        $medico= new Medico;
        
        $medico->NomMed= $request->input('nommed');
        $medico->PatMed= $request->input('patmed');
        $medico->MadMed= $request->input('madmed');
        $medico->FecNacMed= $request->input('fecnacmed');
        $medico->CIMed= $request->input('cimed').' '.$request->input('expmed');
        $medico->UsuMed= $request->input('usumed');
        $medico->password = bcrypt($request->input('password'));
        $medico->save();
        if($medico->id<10)
        {
        $medico->CodMed= 'MED-00'.$medico->id;
        }elseif ($medico->id<100){
            $medico->CodMed= 'MED-0'.$medico->id;
        }elseif($medico->id<1000){
            $medico->CodMed= 'MED-'.$medico->id;

        }
        $medico->save();
        $mensaje="Medico registrado correctamente";
        return redirect()->route('login')->with('mensaje',$mensaje);
    }

}

