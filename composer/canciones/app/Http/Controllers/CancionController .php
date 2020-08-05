<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cancion;
use App\Artista;
use DB;
class CancionController  extends Controller{
  
    public function __construct()
    {
        //
    }

    //
    public function all(Request $request){
       $canciones = Cancion::all();
       return response()->json($canciones,200);
    }

}
