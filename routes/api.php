<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioController;

Route::controller(UsuarioController::class)->group(function(){

    Route::get("/usuarios","index");
    Route::post("/usuario","store");
    Route::put("/usuario/{id}","update");
    Route::delete("/usuario/{id}","destroy");
    
    Route::post("/login","login");
    
    
});


Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::get('Inicio',[UsuarioController::class,'UserProfile']);
    Route::get('logout',[UsuarioController::class,'logout']);
});

