<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CochesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(CochesController::class)->group(function (){
    Route::get('coches', 'index');
    Route::get('coches/{id}', 'show');
    Route::post('coches', 'store');
    Route::put('coches/{id}', 'update');
    Route::delete('coches/{id}', 'delete');
});