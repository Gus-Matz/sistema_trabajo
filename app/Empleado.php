<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $fillable = [
   		'nombre',
   		'sexo',   
    	'tel',
    	'fecha_nacimiento'
	];
}
