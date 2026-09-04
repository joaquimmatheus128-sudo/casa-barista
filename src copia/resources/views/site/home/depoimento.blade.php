<section class="depo">
    <header class="parallax-padrao">
        <h2>DEPOIMENTOS</h2>
        <h3>Nada nos inspira mais do que ouvir a experiência de quem passa por aqui</h3>
    </header>
       
    <div class="itensDepo">

        @forelse($listaDepo as $linha)

        @php
            //Garantir que as estrelas fiquem entre 0 a 5
            $estrela = max(0, min(5, (int)$linha->nota_depoimento));

            //Cliente relacionado ao depoimento
            $cliente = $linha->DepoimentoCliente;

        @endphp
            <article>
                <div class="estrela">
                    <ul>
                        @for ($i = 0; $i <= 5; $i++)
                            <li class="{{ $i < $estrela ? 'estrela-ativa' : 'estrela-inativa' }}">
                                <img src="{{ asset('barista/assets/estrela.png')}}" alt="{{$i <= $estrela ? 'Estrela-Preenchida ': 'Estrela-não-preenchida'}}"> 
                            </li>
                        @endfor
                    </ul>
                </div>

                <div class="dadosDepo">
                    <p>{{$linha->descricao_depoimento}}</p>

                    <img src="{{ asset('barista/assets/'.$cliente->foto_cliente)}}" alt="{{$cliente->nome_cliente}}">
                    <h4>{{$cliente->nome_cliente}}</h4>
                <div>
                    <h5>Data: {{ $linha->data_criacao_depoimento ? $linha->data_criacao_depoimento->format('d/m/Y') : 'Data não informada' }}</h5>
                    <h5>{{$linha->titulo_depoimento}}</h5>
                </div>        
                    
            </article>

        @empty

        @endforelse  
    </div>
</section>
