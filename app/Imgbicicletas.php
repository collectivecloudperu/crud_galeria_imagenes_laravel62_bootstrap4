<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imgbicicletas extends Model
{
    // Instancio la tabla 'img_bicicletas' 
    protected $table = 'img_bicicletas';
    
    // Declaro los campos que usaré de la tabla 'img_bicicletas' 
    protected $fillable = ['nombre', 'formato', 'bicicletas_id'];

    // Relación Inversa (Opcional)
    public function bicicleta()
    {
    	return $this->belongsTo('App\Bicicletas');
    }

    
}
