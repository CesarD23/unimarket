<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DulceController;
use App\Http\Controllers\PapeleriaController;
use App\Http\Controllers\ContactController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('compras', CompraController::class);
Route::resource('dulces', DulceController::class);
Route::resource('papelerias', PapeleriaController::class);
Route::get('/contacto', [ContactController::class, 'show'])->name('contacto.show');
Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store');



