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
                $path = $request->file->store('storage/figurinha');
    
                // Store the record, using the new file hashname which will be it's new filename identity.
                $figurinha = new Figurinha([
                    "nome" => $request->get('nome'),
                    "dtnasc" => $request->get('dtnasc'),
                    "naturalidade" => $request->get('naturalidade'),
                    "file_path" => $request->file->hashName()
                ]);
                dd( $figurinha);
                $figurinha->save(); // Finally, save the record.
            }
           
    }
}
