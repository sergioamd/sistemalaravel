<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    //
    public function index(Request $request){

      $motivo_contatos = MotivoContato::all();
       
        return view('site.contato', ['titulo' => 'Contato ', 'motivo_contatos' => $motivo_contatos]);//retornando o titulo da pagina
     }

     public function salvar (Request $request){
         //vera 3 modelos para preencher os dados vindo do formulario no banco
       /*echo '<pre>';
        print_r($request->all()); //recupera tudo
        echo $request->input('nome'); //recupera so o atributo nome
        echo '</pre>';*/
        /* //1 modelo
        $contato = new SiteContato(); //criação da variavel contato
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
       // print_r($contato->getAttributes());
        $contato->save();*/

        /*//2 modelo metodo fill cria um objeto baseado no array associativo all
        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();*/

        //3 modelo metodo reate cria um objeto baseado no array associativo all
        //$contato = new SiteContato();
       // $contato->create($request->all());

          //realizar a validação dos dados recebidos do formulario 
          $regras = [
            'nome' => 'required|unique:site_contatos',
            //'nome' => 'required|min:3|max:40,// no minimo 3 caracteres ate 40
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
          ];
          
          $feedback = [
               //mensagens padronizadas para avisar o usuario sobre erros
            //'nome.required' =>'O campo nome prescisa ser Preenchido',
            'nome.unique'   =>'O nome informado ja foi utilizado',
            'email.email'    =>'O email informado não é valido',
            'mensagem.max'  =>'A mensagem deve ter no maximo 2000 caracteres',
            //de modo generico preenche todos os campos que tem required e attribute traz o nome dos campos
            'required'      =>'O campo :attribute prescisa ser preenchido'
          ];
          
          $request->validate($regras, $feedback);
          
         //metodo mais enxuto de salvar dados no banco
          SiteContato::create($request->all());
          return redirect()->route('site.index');
 
     }

    

}
