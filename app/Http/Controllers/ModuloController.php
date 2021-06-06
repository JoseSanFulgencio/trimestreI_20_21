<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulo;
use App\Models\User;
use App\Models\Ciclo;
use Illuminate\Support\Facades\Auth;


class ModuloController extends Controller
{
    public function index()
    {
        return view('modulos', 
    				array('array' => Modulo::all()));
    }

    public function getModulo($idModulo)
    {
    	//Recuperamos el usuario logeado. ¡No olvidar los "use" (línea 7 y 8)!
    	$user = User::findOrFail(Auth::user()->id);
    	if($user->email == "8686470@alu.murciaeduca.es"){
        	return view('modulo-edit', 
    					array('registro' => Modulo::findOrFail($idModulo)));
    	}else{
    		//Si el correo no es de la restricción, nos reenvia a la ruta "/modulos"
    		return redirect('/modulos');
    	}
    }

    public function getModulosDeUnCiclo($idCiclo)
    {
    	// Accedemos al ciclo de id=6 y le pasamos a la vista los módulos que tienen ese valor en el campo ciclo_id (ciclo_id = 6)
    	return view('moduloCiclos',     
					array('registro' => Ciclo::findOrFail($idCiclo)->modulos));
    }

    public function putModulo(Request $request)
    {
    	$modulo = Modulo::findOrFail($request->input('idRegistro'));

    	$modulo->nombre = $request->input('nombreRegistro');
    	$modulo->especialidad_id = $request->input('especialidadRegistro');
    	$modulo->ciclo_id = $request->input('cicloRegistro');
    	$modulo->save();
    	return redirect('/modulos');
    }
}