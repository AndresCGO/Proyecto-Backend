<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArmasController;
use App\Http\Controllers\PersonajesController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\skinController;
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


Route::get('/', [App\Http\Controllers\IndexController::class, '__invoke'])->name('/');

Route::get('/API', [App\Http\Controllers\APIController::class, '__invoke'])->name('/API');

Route::get('/Personajes', [App\Http\Controllers\PersonajesController::class, '__invoke'])->name('/Personajes');

Route::get('/Armas', [App\Http\Controllers\ArmasController::class, '__invoke'])->middleware(['auth'])->name('/Armas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
