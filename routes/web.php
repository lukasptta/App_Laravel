<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;


/**Route::get('/', function () {
    return view('welcome');
});
 * 
 */

Route::get('/contato',[ContatoController::class,'Contato']);
Route::get('/sobre-nos',[SobreNosController::class,'Sobrenos']);

Route::get('/', [PrincipalController::class,'Principal']);

/*
  
 Route::get('/sobre-nos',function(){
     return 'Sobre-nós';
    });
    
    Route::get('/contato',function(){
        return "Contato";
    });
    */