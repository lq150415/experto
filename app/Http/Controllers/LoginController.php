<?php

namespace experto\Http\Controllers;

use Illuminate\Http\Request;
use experto\Medico;
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
    public function index3()
    {
    	return view('registropacientes');
    }
    public function index4()
    {
    	return view('diagnostico');
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
        if($medico->id<10)
        {
        $medico->CodMed= 'MED-00'.$medico->id;
        }elseif ($medico->id<100){
            $medico->CodMed= 'MED-0'.$medico->id;
        }elseif($medico->id<1000){
            $medico->CodMed= 'MED-'.$medico->id;

        }
        $medico->NomMed= $request->input('nommed');
        $medico->PatMed= $request->input('patmed');
        $medico->MadMed= $request->input('madmed');
        $medico->FecNacMed= $request->input('fecnacmed');
        $medico->CIMed= $request->input('cimed');
        $medico->UsuMed= $request->input('usumed');
        $medico->password = bcrypt($request->input('password'));
        if ($validator->fails()) {
            return redirect()->route('login')
                        ->withInput()
                        ->withErrors($validator)
                       ;
        }else{
        $medico->save();
        $mensaje="Medico registrado correctamente";
        return redirect()->route('login')->with('mensaje',$mensaje);
    }
    }
}

