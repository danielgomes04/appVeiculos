<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\CarrosController;
use App\Models\Carros;

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
Route::get('/editar-caminhao',[CaminhaoController::class,'MostrarEditarCaminhao'])->name('editar-caminhao');
Route::get('/cadastrarCaminhao',[CaminhaoController::class,'FormularioCadastro'])->name('cadastrar-caminhao');
Route::post('/cadastrarCaminhao',[CaminhaoController::class,'SalvarBanco'])->name('salvar-banco');
Route::get('/listaCaminhao',[CaminhaoController::class,'Lista'])->name('lista-caminhao');
Route::delete('/editar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'ApagarBancoCaminhao'])->name('apagar-caminhao');
Route::get('/alterar-caminhao/{registrosCaminhoes}',[CaminhaoController::class,'MostrarAlterarCaminhao'])->name('alterar-caminhao');
Route::put('/editar-caminhao{registrosCaminhoes}',[CaminhaoController::class,'AlterarBancoCaminhao'])->name('alterar-banco-caminhao');

Route::delete('/editar-carro/{registrosCarros}',[CarrosController::class,'ApagarBancoCarro'])->name('apagar-carro');
Route::get('/editarCarro',[CarrosController::class,'MostrarEditarCarro'])->name('editar-carro');
Route::get('/cadastrarCarro',[CarrosController::class,'FormularioCadastroCarro'])->name('cadastrar-carro');
Route::post('/cadastrarCarro',[CarrosController::class,'SalvarBancoCarros'])->name('salvar-banco-carro');
Route::get('/alterar-carro/{registrosCarros}',[CarrosController::class,'MostrarAlterarCarro'])->name('alterar-carro');
Route::put('/editar-carro{registrosCarros}',[CarrosController::class,'AlterarBancoCarro'])->name('alterar-banco-carro');
Route::get('/listaCarro',[CarrosController::class,'ListaCarro'])->name('lista-carro');