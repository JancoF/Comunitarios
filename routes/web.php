<?php

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

Route::get('/proyectos', function () {
    return view('welcome');
});

// crud de colaborador
/*Route::get("/colaborador/create", function() {
    return "Mostrar el formulario para crear un colaborador";
});*/

Route::get("colaborador/{nombre?}", function($nombre=null){
    
    if ($nombre != null){
    return "el colaborado es: $nombre";
    }
    else{
        return "mostrar el formulario de crear productos";
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
