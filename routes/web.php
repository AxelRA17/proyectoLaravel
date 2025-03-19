<?php
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[InicioController::class,'index']);

Route::get('/vista1',[InicioController::class,'vista1']);
Route::get('/vista2',[InicioController::class,'vista2']);
Route::get('/vista3',[InicioController::class,'vista3']);

Route::get('/vistaTarea',[InicioController::class,'vistaTarea']);

Route::get('/inicio',function(){
    return view('inicio');
});