<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CriarcontaController extends Controller
{
    function index(){
        $criarconta = DB::table('usuarios')
        ->select()
        ->get();

        return view('criarconta.index', [
            'criarconta' => $criarconta
        ]);
    }

    function create(){
        return view('criarconta.create');
    }

    function store(Request $request){
        $data = $request->all();
        unset($data['_token']);

        $data["password"] = Hash::make($data["password"]);

        DB::table('usuarios')->insert($data);

        return redirect('/criarconta');
    }
}
