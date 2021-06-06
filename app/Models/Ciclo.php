<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Un ciclo puede tener n módulos; un módulo puede tener 1 ciclo
class Ciclo extends Model
{

	public function modulos()
    {			// FK de la tabla 'modulos', que hace referencia a la PK de la tabla 'ciclos'
        return $this->hasMany(Modulo::class, 'ciclo_id');
    }

}
