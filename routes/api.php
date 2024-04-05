<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployesController;

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


//se crea prefijo de api rest de crud de empleados
Route::prefix('v1/employes')->group( function () {
    Route::get('/', [ EmployesController::class, 'index' ]); //mostras los empleados
    Route::post('/', [ EmployesController::class, 'create' ] ); //agregar un nuevo empleado
    Route::get('/{id}', [ EmployesController::class, 'getById' ] ); //mostrar un empleado en espesifico
    Route::put('/{id}', [ EmployesController::class, 'update' ] ); //actualizar los datos de un empleado
    Route::delete('/{id}', [ EmployesController::class, 'delete' ] ); //eliminar un empleado
});