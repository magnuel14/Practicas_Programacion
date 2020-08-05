<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
//login
$router->group(['prefix' => 'usuarios'], function($router){
    $router->get('all','UserController@all');
    $router->post('ingresar','UserController@login');
    $router->post('salir','UserController@salir');




});





$router->group(['middleware' => 'auth'], function() use($router){

    //artista
$router->group(['prefix' => 'artista'], function($router){
    $router->get('all','ArtistaController@all');
    $router->get('allJson','ArtistaController@allJson');
    //lista autor segun su cedula
    $router->get('getArtista/{cedula}','ArtistaController@getArtistaCedula');
    //crear revisar
    $router->post('create','ArtistaController@create');

    //lista todos los autores con sus canciones

    $router->get('getall','ArtistaController@getall');

});
//cancion
    
    $router->group(['prefix' => 'cancion'], function($router){
        $router->get('allj','ArtistaController@allj');
        //lista solo canciones ,parametro :cedula del autor
        $router->get('getCanciones/{cedula}','ArtistaController@getCanciones');
        //lista las caciones con su autores ,parametro: cedula
        $router->get('getCNombes/{cedula}','ArtistaController@getCancionesN');
        //listar cancion por codigo,aparece el nombre del autor 
        $router->get('getCancionesCodigo/{codigo}','ArtistaController@getCancionesCodigo');
    
    //crear
        $router->post('createCancion','ArtistaController@createCancion');
        
    
    });
});



