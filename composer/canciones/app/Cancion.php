<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cancion extends Model 
{
    protected $table='modelos_cancion';
    public $timestamps = false;


    protected $fillable = [
        'codigo',
        'nombre',
        'tipoCancion',
        'artista_id',
    ];

  
    protected $hidden = [
        'cancion_id',
        
        
    ];
}
