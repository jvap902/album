<?php

use App\Http\Controllers\FigurinhaController;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use App\Http\Controllers\UsuariosController;

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
    return view('home');
});
Route::match(['get', 'post'],'/login', [ UsuariosController::class, 'login'])->name('login');
Route::get('/getlogin/', function(){
    $login = Usuario::all();
    echo json_encode($login);
});

Route::get('/figurinha/create', [FigurinhaController::class, 'create'])->name('createFigurinha');
Route::post('/figurinha/store', [FigurinhaController::class, 'store'])->name('storeFigurinha');



Route::get('/pacote/create', [FigurinhaController::class, 'create'])->name('createPacoteFigurinha');
