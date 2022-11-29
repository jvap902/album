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

Route::get('/', [ AlbumController::class, 'home']);

Route::get('/login', [ UsuariosController::class, 'login'])->name('login');
Route::post('/login', [UsuariosController::class, 'login'])->name('logar');

// Route::get('/getlogin/', function(){
//     $login = Usuario::all();
//     echo json_encode($login);
// });

// ->middleware('auth')


Route::get('/figurinha/create', [FigurinhaController::class, 'create'])->name('createFigurinha')->middleware('autenticacao');
Route::get('/figurinha/store', [FigurinhaController::class, 'store'])->name('storeFigurinha')->middleware('autenticacao');
Route::get('/figurinha/destroy/{id}', [FigurinhaController::class, 'destroy'])->where('id', '[0-9]+')->name("destroyFigurinha")->middleware('autenticacao');
Route::get('/figurinha/edit/{id}', [FigurinhaController::class, 'edit'])->where('id', '[0-9]+')->name("editFigurinha")->middleware('autenticacao');
Route::post('/figurinha/update/{id}', [FigurinhaController::class, 'update'])->name("updateFigurinha")->middleware('autenticacao');



Route::get('/pacote/create', [FigurinhaController::class, 'create'])->name('createPacoteFigurinha')->middleware('autenticacao');


Route::get('/listagem', [ ListagemController::class, 'listar'])->name('listagem');

