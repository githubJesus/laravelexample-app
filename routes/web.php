<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CochesController;
use App\Http\Controllers\MailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/sendmail', [MailController::class, 'sendMail'])->name('sendMail');
Route::get('/mandarCorreo', [MailController::class, 'inicio'])->name('mail.inicio');

Route::get('/', [CochesController::class, 'indexVista'])->name('coches.indexVista');
Route::get('/c/{id}', [CochesController::class, 'showVista'])->name('coches.showVista');
Route::get('/guardar', [CochesController::class, 'storeuno'])->name('coches.storeuno');
Route::post('/store', [CochesController::class, 'storeVista'])->name('coches.storeVista');
Route::get('/actualizar/{id}', [CochesController::class, 'updateVistaUno'])->name('coches.updateVistaUno');
Route::get('/act/{id}', [CochesController::class, 'updateVistaDos'])->name('coches.updateVistaDos');
Route::delete('/delete/{id}', [CochesController::class, 'deleteVista'])->name('coches.deleteVista');

Route::get('/propietarios', [CochesController::class, 'propietariosVista'])->name('coches.propietarios');

