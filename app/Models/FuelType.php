<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    // Assim podemos atribuir diferentes nomes de tables para que o Laravel entenda o mapeamento
    // protected $table = 'fuel_type';

    // deste modo podemos setar uma primary key difente de 'ID' que é o valor default que o laravel assume
    // protected $primaryKey = 'fuel_type_id';

    // desativa o autoincrement da Primary Key
    // public $incrementing = false;

    // define o tipo da primary Key 
    // protected $keyType = 'string';

    // seta para não criar timestamp quando não tem
    public $timestamps = false;

}
