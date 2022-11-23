<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    function home(Request $request){
        $uid = DB::table('usuarios')->where('email', $request->session()->get('usuario'))->value('id');
        $fu = DB::table('figurinhas')->leftJoin('usuarios_figurinhas', 'figurinhas.id', '=', 'usuarios_figurinhas.figurinhas_id')->where('usuarios_figurinhas.usuario_id', $uid)->get();
        
        foreach($fu as $f){
            $f->dtnasc = Carbon::parse($f->dtnasc)->format('d/m/Y');
        }

        // UsuarioFigurinha::select('*')->where('usuario_id', $usuario)->where('colado', 0)->orderBy('num', 'ASC')->first();

        return view('home', ['figurinhas' => $fu]);
    }
}