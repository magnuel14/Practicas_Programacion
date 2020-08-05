<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Artista;
use App\Cancion;

use DB;

class ArtistaController extends Controller
{
  
    public function __construct()
    {
        //
    }

    //
    public function all(Request $request){
        $artistas = Artista::all();
        return response()->json($artistas,200);
    }

    public function allJson(Request $request){
        if($request->isJson()){
            $artistas = Artista::all();
            return response()->json($artistas,200);
        }
        return response()->json(['error'=>'Unauthorized'],401,[]);
    }

    public function getArtistaCedula(Request $request, $cedula){
        if($request->isJson()){
            $artistas = Artista::where('cedula', $cedula)->get();
            if(!$artistas->isEmpty()){
                return response()->json($artistas,200);
            }else{
                return response()->json(['error'=>'No existe el artista'],401,[]);
            }
        }
        return response()->json(['error'=>'Unauthorized'],401,[]);
    }
   
    public function getall(Request $request){
        if($request->isJson()){
            $artistas = DB::select("select modelos_artista.nombres, modelos_cancion.nombre  from modelos_artista inner join modelos_cancion on modelos_artista.artista_id = modelos_cancion.artista_id ;");

            return response()->json($artistas,200);
        }
        return response()->json(['error'=>'Unauthorized'],401,[]);
    }


   

    public function create(Request $request){
        if($request->isJson()){
            $data = $request->json()->all();
            $artista = Artista::create([
                'cedula' => $data['cedula'],
                'nombres' => $data['nombres'],
                'apellidos' => $data['apellidos'],
                'genero' => $data['genero'],
                "correo" => $data['correo'],
              
                

            ]);
            return response()->json($data['cedula'],200);
        }
        return response()->json(['error'=>'Unauthorized'],401,[]);
    }
//canciones


    public function allj(Request $request){
        $canciones = Cancion::all();
        return response()->json($canciones,200);

     }
     public function getCanciones(Request $request, $cedula){
        if($request->isJson()){
            $canciones = DB::select("select * from modelos_cancion where artista_id = (select artista_id from modelos_artista where cedula = ". $cedula .");");

            return response()->json($canciones,200);
        }
        return response()->json(['error'=>'Unauthorized'],401,[]);
    }
    public function getCancionesN(Request $request, $cedula){
        if($request->isJson()){
            $canciones = DB::select("select modelos_artista.nombres, modelos_cancion.nombre  from modelos_artista inner join modelos_cancion on modelos_artista.artista_id = modelos_cancion.artista_id where modelos_artista.cedula =". $cedula .";");

            return response()->json($canciones,200);
        }
        return response()->json(['error'=>'Unauthorized'],401,[]);
    }
    public function getCancionesCodigo(Request $request, $codigo){
        if($request->isJson()){
            $canciones = DB::select("select *  from modelos_artista inner join modelos_cancion on modelos_artista.artista_id = modelos_cancion.artista_id where modelos_cancion.codigo =". $codigo .";");

            return response()->json($canciones,200);
        }
        return response()->json(['error'=>'Unauthorized'],401,[]);
    }


    public function createCancion(Request $request){
        if($request->isJson()){
            $data = $request->json()->all();
            $canciones = Cancion::create([
                'codigo' => $data['codigo'],
                'nombre' => $data['nombre'],
                'tipoCancion' => $data['tipoCancion'],
                'artista_id' => $data['artista_id'],
              

            ]);
            return response()->json($data['codigo'],200);
        }
        return response()->json(['error'=>'Unauthorized'],401,[]);
    }



}
