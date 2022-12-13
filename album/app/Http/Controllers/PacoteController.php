<?php

namespace App\Http\Controllers;

use App\Models\Figurinha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacoteController extends Controller
{
    function create(Request $request)
    {
        $pacote = Figurinha::all()->random(5);
        // $usuario = DB::table('usuarios')->select('id')->where('email', '=', $request->session()->get('usuario'))->first();

        foreach ($pacote as $p) {
            Figurinha::salvarAlbum(1, $p->id);
        }

        return [$pacote];
    }
}
