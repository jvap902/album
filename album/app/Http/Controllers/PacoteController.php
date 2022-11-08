<?php

namespace App\Http\Controllers;

use App\Models\Sticker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacoteController extends Controller
{
    function create(){
        $pacote = Sticker::all()->random(5);

        return view('home', [
            'pacote' => $pacote
        ]);
    }
}