<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicletas extends Model
{
    // Instancio la tabla 'jugos' 
    protected $table = 'bicicletas';
    
    // Declaro los campos que usaré de la tabla 'jugos' 
    protected $fillable = ['nombre', 'precio', 'stock', 'imagenes', 'url'];

    // Relación 
    public function imagenesbicicletas()
    {
        return $this->hasMany('App\Imgbicicletas');
    }

}
