<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PdfController;



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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Routas de la tabla libros
Route::resource('libros', LibrosController::class)->except(['show'])->middleware('auth');
Route::post('/libros', [LibrosController::class, 'store'])->name('libros.store');
Route::get('/libros/{libro}/edit', [LibrosController::class, 'edit'])->name('libros.edit');
Route::delete('/libros/{id}', [LibrosController::class, 'destroy'])->name('libros.destroy');

//Rutas de generar pdf
Route::get('/libros/generate-pdf/{id}', [PdfController::class, 'generatePdf'])->name('libros.generate-pdf');




