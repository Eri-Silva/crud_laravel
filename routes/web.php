<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItensController;
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

Route::get('/', function () {
    return view('PaginaInicial');
});

Route::get('/inserir', [ItensController::class, 'create']);
Route::post('/inserir', [ItensController::class, 'store'])->name('salvar');

Route::get('/ver/{id}', [ItensController::class, 'show'])->name('mostrar');

Route::get('/editar/{id}', [ItensController::class, 'edit'])->name('editar');
Route::post('/editar/{id}', [ItensController::class, 'update'])->name('salvar');

Route::get('/excluir/{id}', [ItensController::class, 'delete'])->name('excluir');
Route::post('/excluir/{id}', [ItensController::class, 'destroy'])->name('deletar');