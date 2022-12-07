<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    function home(Request $request){
        $uid = DB::table('usuarios')->where('email', $request->session()->get('usuario'))->value('id');

        
        $fuColadas = DB::table('figurinhas')->leftJoin('usuarios_figurinhas', 'figurinhas.id', '=', 'usuarios_figurinhas.figurinhas_id')->orderby('numero', 'DESC')->where([['usuarios_figurinhas.usuario_id', $uid], ['usuarios_figurinhas.colada', 1]])->get();


        $figurinhas = DB::table('figurinhas')->orderby('numero', 'DESC')->get();

        $colada = false; $n = 0;
        foreach($figurinhas as $f){
            foreach($fuColadas as $fc){
                if($fc->figurinhas_id == $f->id){
                    $colada = true;
                    break;
                }
            }
            if(!$colada){
                $fuNaoColadas[$n] = $f;
                $n++;
            }
            $colada = false;
        }
        foreach($fuColadas as $f){
            $f->dtnasc = Carbon::parse($f->dtnasc)->format('d/m/Y');
        }

       
        return view('home', ['figurinhas' => $fuColadas]);
    }
}