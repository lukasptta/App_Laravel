<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteControler;
use App\Http\Controllers\FornecedorControler;



Route::get('/', [PrincipalController::class,'Principal'])->name('site.index');
Route::get('/contato',[ContatoController::class,'Contato'])->name('site.sobbrenos');
Route::get('/sobre-nos',[SobreNosController::class,'Sobrenos'])->name('site.contato');

Route::get('/login',function(){
    return 'login';
})->name('site.login');

Route::prefix('/app')->group(function(){
 
    Route::get('/clientes',function(){
        return 'clientes';
    })->name('app.clientes');
    
    Route::get('/fornecedores',[FornecedorControler::class,'index']
    )->name('app.fornecedores');
    
    Route::get('/produtos',function(){
        return 'produtos';
    })->name('app.produtos');
});
    Route::fallback(function(){
        echo 'A rota acessada não existe. <a href=" '.route('site.index').'">clique aqui</a>';
    });



    Route::get('teste/{p1}/{p2}',[TesteControler::class,'teste'])->name('teste');