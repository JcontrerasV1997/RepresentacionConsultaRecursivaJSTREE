<?php
namespace App\Http\Controllers;

use App\Models\Prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pruebaController extends Controller
{
    //


    public function mostrar()
    {

    
       $prueba=Prueba::metodo();

    // $consulta='SELECT * FROM Vista'; 
    // $ejecucion = DB::select($consulta);
    //    return $ejecucion;


        // $variable = Prueba::all();
        //return view('mensajes.index', compact('mensajes'));
        return view('vistaPrueba.prueba')->with('prueba', $prueba);
    
    }
    
    //return view('mensajes.index', compact('mensajes'));
   
}
