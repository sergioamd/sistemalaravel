<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index(Request $request) {

        $erro = '';
        if($request->get('erro') == 1){
            $erro = 'Usuário e ou senha não existe';
        }
        if($request->get('erro') == 2){
            $erro = 'Necessario realizar Login para acesso a pagina';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request){
       //regras de validação
       $regras = [
        'usuario' => 'email',
        'senha' => 'required'

       ];

       //as mensagens de feedback de validação
       $feedback = [
          'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
          'senha.required' => 'O campo senha e obrigatório'
       ];
          //se nao passar pelo validate ira para as rota anterior
       $request->validate($regras, $feedback);

       //recueramos os parametros do formulario
       $email = $request->get('usuario');
       $password = $request->get('senha');
                  
       $user = new User();
       $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

       if(isset($usuario->name)){
          
           session_start();//abrir a sessao do php
           $_SESSION['nome'] = $usuario->name;//super global session pegando os atributos
           $_SESSION['email'] = $usuario->email;

           return redirect()->route('app.home');
       }else{
           return redirect()->route('site.login', ['erro' => 1]);
       }

    }

    public function sair(){
        session_destroy(); 
        return redirect()->route('site.login');
   }
   
    
}
