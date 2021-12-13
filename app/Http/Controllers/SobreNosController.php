<?php

namespace App\Http\Controllers;
//use App\Http\Middleware\logAcessoMiddleware;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    /*//adicionando o middleware diretamente no construtor do controller
    public function __construct(){
        $this->middleware(logAcessoMiddleware::class);

    }*/

    public function index(){
        return view('site.sobrenos');
     }
}
