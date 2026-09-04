@extends ('layout.site')

@section('content')
<body class="pg-contato">
        <!-- Começo banner -->
        @include('site.home.banner')
        <!-- Final banner -->

        <!-- Começo Formulário -->
        @include('site.contato.formulario')
        <!-- Final Formulário -->

        <!-- Começo da seção mapa -->
        @include('site.contato.mapa')
        <!-- Final da seção mapa -->
</body>
@endsection