<?php

namespace App\Http\Controllers;

use App\Models\Figurinha;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class FigurinhaController extends Controller
{
    function index()
    {
        $figurinhas = DB::table('figurinhas')
            ->select()
            ->get();

            return view('figurinhas.index', ['figurinhas' => $figurinhas]);
    }

    function create()
    {
        return view('figurinha.create');
    }

    function store(Request $request)
    {
        try{
            $data = $request->all();
            unset($data['_token']);
            if($request->file){
                $figurinhas = DB::table('figurinhas')->get();
                foreach ($figurinhas as $f){
                    if($f->numero == $request->get('numero')){
                        return view('figurinha.create', ['erro' => "Este número já existe!"]);
                    }
                }
                    $request->validate([
                        'image' => 'mimes:jpeg,jpg,bmp,png'
                    ]);
                    $request->file->store('public');

                    $figurinha = new Figurinha([
                        "nome" => $request->get('nome'),
                        "dtnasc" => $request->get('dtnasc'),
                        "naturalidade" => $request->get('naturalidade'),
                        "numero" => $request->get('numero'),
                        "file_path" => $request->file->hashName()
                    ]);
                    $figurinha->save();
            }else{
                return view('figurinha.create', ['erro' => "Escolha uma imagem para a figurinha!"]);
            }


                return redirect('/listagem');
        }catch(Exception $e){
            return view('figurinha.create', ['erro' => $e]);
        }
    }

    function edit($id){
        $figurinha = DB::table('figurinhas')->find($id);
        return view('figurinha.edit', ['figurinha' => $figurinha]);

    }

    function update(Request $request){

        $data = $request->all();

        unset($data['_token']);

        $id = array_shift($data);

        DB::table('figurinhas')->where('id', $id)->update($data);

        return redirect('/listagem');

    }

    function destroy($id){
        DB::table('figurinhas')->where('id', $id)->delete();

        return redirect ('/listagem');
    }
}
