<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugos extends Model
{
    // Instancio la tabla 'jugos' 
    protected $table = 'jugos';
    
    // Declaro los campos que usaré de la tabla 'jugos' 
    protected $fillable = ['nombre', 'precio', 'stock', 'img'];

    protected $casts = [
	    'img' => 'json',
	];
}
