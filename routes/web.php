<?php
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[InicioController::class,'index']);
Route::get('/minecraft',[InicioController::class,'minecraft']);
Route::get('/movie',[InicioController::class,'movie']);
Route::get('/dungeons',[InicioController::class,'dungeons']);
Route::get('/legends',[InicioController::class,'legends']);
