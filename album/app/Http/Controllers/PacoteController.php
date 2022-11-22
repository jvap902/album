<?php

namespace App\Http\Controllers;

use App\Models\Figurinha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacoteController extends Controller
{
    function create(){
        $pacote = Figurinha::all()->random(5);

        return view('home', [
            'pacote' => $pacote
        ]);
    }
}