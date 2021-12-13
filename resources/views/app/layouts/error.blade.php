@extends('app.layouts.basico')

@section('titulo', 'Relatorio')
     
@section('conteudo')


<div class="error-page">
    <section>
        <div class="container ">
    
            <section class="error-wrapper text-center">
                <h1><img alt="" src="images/404-error.png"></h1>
                <h2>pagina em construção</h2>
                <a class="back-btn" href="{{ route('app.home') }}"> Back To Home</a>
            </section>
    
        </div>
    </section>
</div>
@endsection