<?php

use App\Http\Controllers\ActorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/listar',[ActorController::class,'listar'])->name("listar");
Route::get('/modificar/{id}',[ActorController::class,'formulariomodificar']);
Route::post('/modificar/{id}',[ActorController::class,'formulariomodificarPost']);
Route::get('/formulario',[ActorController::class,'formulario']);
Route::post('/formulario',[ActorController::class,'formularioPost']);