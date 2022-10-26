<?php

namespace App\Http\Controllers;

use App\Models\Figurinha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data = $request->all();
        unset($data['_token']);
        if ($request->hasFile('file')) {
                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' 
                ]);

                $request->file->store('public');

                $figurinha = new Figurinha([
                    "nome" => $request->get('nome'),
                    "dtnasc" => $request->get('dtnasc'),
                    "naturalidade" => $request->get('naturalidade'),
                    "file_path" => $request->file->hashName()
                ]);
                $figurinha->save();
            }
            // fazer try catch 
            return view('figurinha.teste');
    }

    function edit(){
        return view('figurinha.edit');
    }
}
