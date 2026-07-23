<header class="topo" id="topoFixo">
        <div class="site">
        
                <!-- LOGO -->
                <h1>Casa do Barista</h1>

                <!-- MENU -->
                <button class="abrir-menu"></button>
                <nav class="menu">
                    <button class="fechar-menu"></button>
                    <?php $pgAtual = basename($_SERVER['PHP_SELF']);?>
                    <ul>
                        <li>
                            <a class="<?php if($pgAtual == 'index.php') echo 'menu-ativo'?>" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <a class="<?php if($pgAtual == 'sobre.php') echo 'menu-ativo'?>" href="{{ route('sobre') }}">Sobre</a>
                        </li>
                        <li>
                            <a class="<?php if($pgAtual == 'cardapio.php') echo 'menu-ativo'?>" href="{{ route('cardapio') }}">Cardápio</a>
                        </li>
                        <li>
                            <a class="<?php if($pgAtual == 'eventos.php') echo 'menu-ativo'?>" href="{{ route('eventos') }}">Eventos</a>
                        </li>
                        <li>
                            <a class="<?php if($pgAtual == 'contato.php') echo 'menu-ativo'?>" href="{{ route('contato') }}">Contato</a>
                        </li>
                    </ul>

                    <!-- LOGIN -->
                    <a href="#"class="login">
                        <img src="{{ asset('barista/assets/login.png') }}" alt="Login Casa do Barista">
                    </a>

                        <!-- Rede Social  | ul>li*3>a>img -->
                    <ul class="redeSocial">
                        <li><a href="#" target="_blank"><img src="{{ asset('barista/assets/facebook-24.png') }}" alt="Logo Facebook - Casa do Barista"></a></li>
                        <li><a href="#" target="_blank"><img src="{{ asset('barista/assets/instagram-24.png') }}" alt="Logo Instagram - Casa do Barista"></a></li>
                        <li><a href="https://wa.me/5511999999999?text=Olá!%20Tudo%20bem%3F" target="_blank"><img src="{{ asset('barista/assets/whatsapp-24.png') }}" alt="Logo Whatsapp - Casa do Barista"></a></li>
                    </ul>
                </nav>

            </div>
        </header>