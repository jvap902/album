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
            if ($request->hasFile('file')) {
                    $request->validate([
                        'image' => 'mimes:jpeg,bmp,png' 
                    ]);
    
                    $request->file->store('');
    
                    $figurinha = new Figurinha([
                        "nome" => $request->get('nome'),
                        "dtnasc" => $request->get('dtnasc'),
                        "naturalidade" => $request->get('naturalidade'),
                        "numero" => $request->get('numero'),
                        "file_path" => $request->file->hashName()
                    ]);
                    $figurinha->save();
                }
                return redirect('/');
        }catch(Exception $e){
            return view('figurinha.create', ['erro' => $e]);
        }
    }

    function edit(){
        return view('figurinha.edit');
    }
}
