@extends ('layout.site')

@section('content')

        <!-- Começo do Bem-Vindo -->
        @include('site.home.bemvindo')
        <!-- Fim do Bem Vindo -->
        
        <!-- Começo da seção equipe -->
        @include('site.home.equipe')
        <!-- Final da seção equipe -->

        <!-- COMEÇO DA SEÇÃO DEPO -->
        @include('site.home.depoimento')
        <!-- FINAL DA SEÇÃO DEPO -->

@endsection