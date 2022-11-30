<?php

namespace App\Http\Controllers;

use App\Models\Figurinha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacoteController extends Controller
{
    function create(Request $request){
        $pacote = Figurinha::all()->random(5);

        foreach($pacote as $p){

            $usuario = DB::table('usuarios')->select('id')->where('email', '=', $request->session()->get('usuario'))->get();
            
            $data['usuario_id'] = $usuario[0]->id;
            $data['figurinhas_id'] = $p->id;
            $data['colada'] = 0;

            DB::table('usuarios_figurinhas')->insert($data);
            
        }

        return view('home', [
            'pacote' => $pacote
        ]);
    }
}
