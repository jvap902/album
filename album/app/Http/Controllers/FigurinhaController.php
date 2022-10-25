<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FigurinhaController extends Controller
{
    function index(){
        $figurinhas = DB::table('figurinhas')
        ->select()
        ->get();
    }
}
