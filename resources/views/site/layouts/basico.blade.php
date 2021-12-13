<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>SistemaGVA - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_base.css')}}">
    </head>

    <body>

        @include('site.layouts.menu') <!--incluindo o menu e o topo do site-->
        @yield('conteudo') <!--  a posição da section conteudo-->
   

    </body>
</html>
