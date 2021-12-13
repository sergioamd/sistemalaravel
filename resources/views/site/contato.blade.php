@extends('site.layouts.basico')
        
   @section('titulo', $titulo)
     
@section('conteudo')
       

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">                       <!--array associativo passando parametros-->
                   @component('site.layouts._components.form_contato', ['classe' =>'borda-preta', 'motivo_contatos' => $motivo_contatos]) <!--inserção do formulario da
                     classe borda preta do css-->
                   <!--para mandar as mensagens do parametro P mas nao esquecer de colocar a função slot na view form-->
                   <p>A nossa equipe analisará a sua mensagem e retornaremos o mais breve possível</p> 
                   <p>Nosso tempo de resposta e de  48 horas</p>
                   @endcomponent    
                </div>
            </div>  
        </div>

        

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="{{asset('img/facebook.png')}}">
                <img src="{{asset('img/linkedin.png')}}">
                <img src="{{asset('img/youtube.png')}}">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="{{asset('img/mapa.png')}}">
            </div>
        </div>
        @endsection