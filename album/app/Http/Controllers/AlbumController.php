<?php

namespace App\Http\Controllers;

use App\Models\Figurinha;
use App\Models\UsuariosFigurinhas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller {

    function infoFigurinhas(Request $request) {
        $uid = $request->get('id');

        $fuColadas = DB::select( DB::raw("select * from figurinhas inner join usuarios_figurinhas on usuarios_figurinhas.figurinhas_id = figurinhas.id where colada = 1 and usuario_id = :somevariable"), array(
            'somevariable' => $uid,
        ));
         
        $figurinhas = DB::table('figurinhas')->orderby('numero', 'DESC')->get();

        $fuNaoColadas = DB::table('usuarios_figurinhas')->leftJoin('figurinhas', 'figurinhas.id', '=', 'usuarios_figurinhas.figurinhas_id')->where('usuarios_figurinhas.colada', 0)->orderby('numero', 'DESC')->get();

        $colada = false;
        $n = 0;
        $arrayFiguras = [];
        foreach ($figurinhas as $f) {
            foreach ($fuColadas as $fc) {
                if ($fc->figurinhas_id == $f->id) {
                    $colada = true;
                    $arrayFiguras[] = $fc;
                    break;
                }
            }
            if (!$colada) {
                $n++;
                $arrayFiguras[] = $f;
            }
            $colada = false;
        }
        foreach ($figurinhas as $f) {
            if (isset($f?->dtnasc)) {
                $f->dtnasc = Carbon::parse($f->dtnasc)->format('d/m/Y');
            }
        }

        return [$arrayFiguras, $fuNaoColadas];
    }

    function colaFigurinhas(Request $request) {
        $id = $request->get('id');
        $figurinha = UsuariosFigurinhas::where('figurinhas_id', $id)->first();
        $figurinha->colada = 1;
        $figurinha->save();
    }
    public function infoLogin(Request $request) {
        $usuario = $request->session()->get('usuario');
        return ($usuario);
    }
}