<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    // chamando a view principal no diretorio resource/viewa/site/principal.blade.php
    public function index(){

 //simular o banco de dados
    
     //$motivo_contatos = MotivoContato::all();

       return view('site.login');
       
    }
}
