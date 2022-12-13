<?php

namespace App\Http\Controllers;

use App\Models\Figurinha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacoteController extends Controller
{
    function create(Request $request){
        $pacote = Figurinha::all()->random(5);
        $usuario = DB::table('usuarios')->select('id')->where('email', '=', $request->session()->get('usuario'))->get();
        
        foreach($pacote as $p){
            $data['usuario_id'] = $usuario[0]->id;
            $data['figurinhas_id'] = $p->id;
            $data['colada'] = 0;

            DB::table('usuarios_figurinhas')->insert($data);
            
        }

        $fu = DB::table('figurinhas')->leftJoin('usuarios_figurinhas', 'figurinhas.id', '=', 'usuarios_figurinhas.figurinhas_id')->where('usuarios_figurinhas.usuario_id', $data['usuario_id'])->get();
        return view('home', [
            'pacote' => $pacote,
            'figurinhas' => $fu
        ]);
    }
}
