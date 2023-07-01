<?php

use App\Http\Controllers\ProyectoController;
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

// crud de proyectos
Route::get("/proyecto/create", [ProyectoController::class,'create']);


Route::get('/proyecto',[ProyectoController::class, 'index']);
   
Route:: get("/fondos",[ProyectoController::class, 'fondos']);

/*
Route::get("proyetos/{nombre?}", function($nombre=null){
    
    if ($nombre != null){
    return "el colaborado es: $nombre";
    }
    else{
        return "mostrar el formulario de crear productos";
    }
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
