<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\CarrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editarCaminhao',[CaminhaoController::class,'Editar'])->name('editar');
Route::get('/cadastrarCaminhao',[CaminhaoController::class,'FormularioCadastro'])->name('cadastrarCaminhao');
Route::post('/cadastrarCaminhao',[CaminhaoController::class,'SalvarBanco'])->name('salvar-banco');
Route::get('cadastrarCarro',[CarrosController::class,'FormularioCadastroCarro'])->name('cadastrarCarro');
Route::post('/cadastrarCarro',[CarrosController::class,'SalvarBancoCarros'])->name('salvar-banco-carro');