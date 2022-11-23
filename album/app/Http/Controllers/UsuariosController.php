<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{

    public function login(Request $request)
    {

        if ($request->isMethod('POST')) {
            // Tenta o login
            $dados = $request->only('email', 'password');
            $usuarios = DB::table('usuarios')->where('email', $dados['email'])->first();
            if($usuarios && $usuarios->senha == $request->get('password')){
                $request->session()->put('usuario',  $dados['email']);
                return redirect('/');
            }else{
                return view("login/login", ['erro' => 'dados incorretos!']);
            }

        }

        return view("login.login");
    }
    public function logout(Request $request){
        $request->session()->forget('usuario');
        return redirect()->route('index');
    }
}
