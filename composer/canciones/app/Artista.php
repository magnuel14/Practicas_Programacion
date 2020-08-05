<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Artista extends Model 
{
    protected $table='modelos_artista';
    public $timestamps = false;

    

    protected $fillable = [
        'cedula',
        'nombres',
        'apellidos',
        'genero',    
        'correo',
        
    ];

  
    protected $hidden = [
        'artista_id',
    ];
}
