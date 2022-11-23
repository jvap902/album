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

            $data['usuario_id'] = $request->session()->get('usuarios');
            $data['figurinhas_id'] = $pacote[0]->id;

            DB::table('usuarios_figurinhas')->insert($data);
            // tem q terminar
        }

        return view('home', [
            'pacote' => $pacote
        ]);
    }
}
