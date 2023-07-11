<?php

use App\Http\Controllers\PaypalController;
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


Route::get('/index',[ProyectoController::class, 'index']);

// crud de proyectos
Route::get("/create", [ProyectoController::class,'create']);


Route::get('/hacemos',[ProyectoController::class, 'hacemos']);
   
Route:: get("/fondos",[ProyectoController::class, 'fondos']);

Route:: get("/conocenos",[ProyectoController::class, 'conocenos']);

Route:: get("/block",[ProyectoController::class, 'block']);

Route::post('paypal/payment',[PaypalController::class,'payment'])->name('paypal');
Route::get('paypal/succes',[PaypalController::class, 'succes'])->name('paypal_succes');
Route::get('paypal/cancel',[PaypalController::class, 'cancel'])->name('paypal_cancel');





Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
