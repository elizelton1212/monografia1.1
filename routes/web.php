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
|fghghdjsdhsj
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome2');
});
Route::post('/novo',[App\Http\Controllers\CategoriaController::class, 'registar'])->name('registar');
Route::get('/teste',[App\Http\Controllers\teste::class, 'teste']);
Route::get('/teste2', [App\Http\Controllers\teste::class, 'teste2']);
Route::get('/novo',[App\Http\Controllers\CategoriaController::class,'criar'])->name('categoria.criar');
Route::get('/categoria',[App\Http\Controllers\CategoriaController::class,'index'])->name('categoria.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cadastrar_provincia', [App\Http\Controllers\ProvinciaController::class, 'index']);
Route::post('/cadastrar-provincia', [App\Http\Controllers\ProvinciaController::class, 'store']);
Route::get('/cadastrar-municipio', [App\Http\Controllers\MunicipioController::class, 'index']);
Route::get('/consultarProvincias', [App\Http\Controllers\ProvinciaController::class, 'provincias']);
Route::post('/cadastrarMunicipio', [App\Http\Controllers\MunicipioController::class, 'store']);
Route::get('/cadastrar-districto', [App\Http\Controllers\DistritoController::class, 'index']);
Route::post('/provinciaMunicipios/{provincia}', [App\Http\Controllers\DistritoController::class, 'consultarMunicipios']);
Route::post('/cadastrar_districto', [App\Http\Controllers\DistritoController::class, 'store']);
Route::get('/cadastrar-comuna', [App\Http\Controllers\ComunaController::class, 'index']);
Route::post('/cadastrar_comuna', [App\Http\Controllers\ComunaController::class, 'store']);
Route::get('/cadastrar-local', [App\Http\Controllers\LocalController::class, 'index']);
Route::get('/consultarDistritos/{id}', [App\Http\Controllers\MunicipioController::class, 'show']);
Route::get('/consultarComunas/{id}', [App\Http\Controllers\MunicipioController::class, 'comunas']);
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'categorias']);
Route::post('/cadastrarLocal', [App\Http\Controllers\LocalController::class, 'store']);
