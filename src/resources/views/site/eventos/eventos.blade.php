@extends ('layout.site')

@section('content')
        <!-- Começo da seção eventos -->
        @include('site.home.evento')
        <!-- Final da seção eventos -->

        <!-- COMEÇO DA SEÇÃO DEPO -->
        @include('site.home.depoimento')
        <!-- FINAL DA SEÇÃO DEPO -->
@endsection