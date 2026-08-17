<section class="galeria">
    <header class="parallax-padrao">
        <h2>Galeria</h2>
        <h3>Momentos que traduzem nosso propósito</h3>
    </header>

    <div class="itensGaleria">
        @foreach ($listaGaleria as $linha)
            <div>
                <img src="{{ asset('barista/assets/' . $linha->imagem_galeria) }}" alt="{{ $linha->nome_galeria }}">
            </div>
        @endforeach
    </div>
</section>