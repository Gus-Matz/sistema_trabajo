<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Empleado extends Model
{
    protected $table = 'empleado';
    protected $fillable = [
   		'nombre',
   		'sexo',   
    	'tel',
    	'fecha_nacimiento'
	];

	public function setFechaNacimientoAttribute($value)
	{
		$this->attributes['fecha_nacimiento'] = Carbon::createFromFormat('d/m/Y',$value)->format('Y-m-d H:i:s');
	}
}
