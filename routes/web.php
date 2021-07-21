<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PrincipalController;
/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('index')->get('/',[AlumnosController::class,'index']);
Route::name('editar')->get('editar/{id}',[AlumnosController::class,'edit']);
Route::name('store')->post('store/',[AlumnosController::class,'store']);
Route::name('destroy')->delete('destroy/{id}',[AlumnosController::class,'destroy']);


// ----- PDF
Route::name('pdfalumnos')->get('pdfalumnos',[AlumnosController::class,'getPdfAlumnos']);

// ----- Excel
Route::name('excel')->get('export',[AlumnosController::class,'export']);
Route::name('import')->post('import',[AlumnosController::class,'import']);


// ----- carrito ---------------------

Route::name('productos')->get('productos',[ProductosController::class,'index']);
Route::name('carrito')->get('carrito',[ProductosController::class,'carrito']);
Route::name('agregar')->get('agregar/{id}',[ProductosController::class,'agregar']);
Route::name('actualizar')->patch('actualizar',[ProductosController::class,'actualizar']);
Route::name('borrar')->delete('borrar',[ProductosController::class,'borrar']);


/** Rutas de la plantilla */
Route::get('index1',[PrincipalController::class,'index1'])->name('index1');


/** Rutas QR */
Route::name('qrcode')->get('qrcode',[AlumnosController::class,'QrCode']);
Route::view('escanearQR','escanearQR'); 