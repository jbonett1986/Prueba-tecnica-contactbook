<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('list-contacto', [contactoController::class,'index']);//mostrar todos los registros
Route::post('create-Contacto', [contactoController::class,'create']);//crear un registro
Route::put('update-contacto/{id}', [contactoController::class,'update']);//actualizar registro
Route::delete('delete-contacto/{id}', [contactoController::class,'destroy']);//eliminar registro