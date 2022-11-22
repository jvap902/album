<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    // Ações de login
    public function login(Request $form)
    {
        // Está enviando o formulário
        if ($form->isMethod('POST')) {
            // Se um dos campos não for preenchidos, nem tenta o login e volta para a página anterior
            $credenciais = $form->validate([
                'email' => ['required'],
                'password' => ['required'],
            ]);

            // Tenta o login
            if (Auth::attempt($credenciais)) {
                session()->regenerate();
                $form->session()->put('usuario', $credenciais['email']);
                return redirect()->route('home');
            } else {
                // Login deu errado (usuário ou senha inválidos)
                return redirect()->route('login.login')->with(
                    'erro',
                    'Email ou senha inválidos.'
                );
            }
        }

        return view("login/login");
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route("home");

    }

}
