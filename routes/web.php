<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', [ProdutoController::class, 'create']);
Route::resource('produtos', ProdutoController::class);
Route::post('/produtos/novo', [ProdutoController::class, 'store'])->name('registrar_produto');
Route::get('/produtos/ver/{id}', [ProdutoController::class, 'show'])->name('produtos.show');
Route::get('/produtos/editar/{id}', [ProdutoController::class, 'edit']);
Route::put('/produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::get('/produtos/delete/{id}', [ProdutoController::class, 'delete'])->name('produtos.delete');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');