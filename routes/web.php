<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
<<<<<<< HEAD
<<<<<<< HEAD
Route::put('/categoria/{id}',[App\Http\Controllers\CategoriaController::class,'actualizar'])->name('categoria.actualizar');
Route::delete('/categoria/{id}',[App\Http\Controllers\CategoriaController::class,'apagar'])->name('categoria.apagar');
Route::post('/novo',[App\Http\Controllers\CategoriaController::class, 'registar'])->name('registar');
Route::get('/admin',[App\Http\Controllers\teste::class, 'admin']);
=======
Route::post('/novo',[App\Http\Controllers\CategoriaController::class, 'registar'])->name('registar');
=======
Route::post('/novo',[App\Http\Controllers\categoriaController::class, 'registar'])->name('registar');
>>>>>>> parent of 6d0ff7d (Locais e Localização)
Route::get('/teste',[App\Http\Controllers\teste::class, 'teste']);
>>>>>>> 6d0ff7dff5384efe73ea11391527364f734b24b3
Route::get('/teste2', [App\Http\Controllers\teste::class, 'teste2']);
Route::get('/novo',[App\Http\Controllers\categoriaController::class,'criar'])->name('categoria.criar');
Route::get('/categoria',[App\Http\Controllers\categoriaController::class,'index'])->name('categoria.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
