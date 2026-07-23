@extends('layout.site')

@section('content')


        <!-- Inicio da Seção Cardápio -->
        @include('site.home.cardapio')
        <!-- Fim da seção Cardápio -->
        
        <!-- Começo da seção Galeria -->
        @include('site.home.galeria')
        <!-- Final da seção Galeria -->

        <!-- COMEÇO DA SEÇÃO DEPO -->
        @include('site.home.depoimento')
        <!-- FINAL DA SEÇÃO DEPO -->

@endsection