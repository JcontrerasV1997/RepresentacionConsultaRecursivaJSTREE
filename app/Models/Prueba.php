<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Prueba extends Model
{

    protected $table = 'Empresa';
    protected $fillable=[
        'EmpID',
        'idDepartamento',
        'departamento',
        'nombreGerente',
        'numeroTelefono',
        'fechaNacimiento',
        'fechaInicio'
        
];


// public static function metodo(){
//     $consulta='SELECT * FROM Vista'; 
//     $ejecucion = DB::select($consulta);
//        return $ejecucion;

// }
    
    
}
