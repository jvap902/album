<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FigurinhaController;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PacoteController;
use App\Http\Controllers\ListagemController;
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

// Route::get('/', [ AlbumController::class, 'home'])->middleware('autenticacao');

Route::get('/login', [ UsuariosController::class, 'login'])->name('login');
Route::post('/login', [UsuariosController::class, 'login'])->name('logar');
Route::get('/logout', [UsuariosController::class, 'logout'])->name('logout');
Route::get('/logado', [UsuariosController::class, 'logado']);
Route::get('/infoLogin', [ AlbumController::class, 'infoLogin'])/* ->middleware('autenticacao')  Login do Frontend*/; 



Route::get('/figurinha/create', [FigurinhaController::class, 'create'])->name('createFigurinha')->middleware('autenticacao');
Route::post('/figurinha/store', [FigurinhaController::class, 'store'])->name('storeFigurinha')->middleware('autenticacao');
Route::get('/figurinha/destroy/{id}', [FigurinhaController::class, 'destroy'])->where('id', '[0-9]+')->name("destroyFigurinha")->middleware('autenticacao');
Route::get('/figurinha/edit/{id}', [FigurinhaController::class, 'edit'])->where('id', '[0-9]+')->name("editFigurinha")->middleware('autenticacao');
Route::post('/figurinha/update/{id}', [FigurinhaController::class, 'update'])->name("updateFigurinha")->middleware('autenticacao');

Route::post('/infoFigurinhas', [ AlbumController::class, 'infoFigurinhas'])/* ->middleware('autenticacao') */;
Route::post('/colaFigurinhas', [ AlbumController::class, 'colaFigurinhas'])/* ->middleware('autenticacao') */;

Route::get('/pacote/create', [PacoteController::class, 'create'])->name('createPacoteFigurinha');


Route::get('/listagem', [ ListagemController::class, 'listar'])->name('listagem');

