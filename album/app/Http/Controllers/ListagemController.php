<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Figurinha;


class ListagemController extends Controller
{


    public function listar()
    {
        $figurinhas = Figurinha::get();

        return view('listagem/listagem', compact('figurinhas'));
    }

}
