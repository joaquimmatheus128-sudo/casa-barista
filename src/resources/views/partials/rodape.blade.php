<footer class="rodape wow animate__animated animate__fadeInUp">
            <!-- CONTEÚDO PRINCIPAL DO RODAPÉ -->
            <section class="site rodape-grid wow animate__animated animate__fadeInUp">

                <div class="coluna-end">
                    <h3>Nosso Endereço</h3>
                    <address>
                        Av Marechal Tito, 1500 <br> <!-- Quebra de linha -->
                        São Miguel Paulista
                    </address>
                    <a href="{{ route('home') }}">Mapa</a>
                </div>

                <div class="coluna-reserva">
                    <div class="box-reserva">
                        <h3>Faça sua Reserva</h3>
                        <div class="linha-box">
                            <hr>
                            <img src="{{ asset('barista/assets/coffeeres.svg') }}" alt="Faça sua reserva">
                            <hr>
                        </div>
                        <ul>
                            <li>Segunda - Sexta <span>09:00 - 00:00</span></li>
                            <li>Sábado <span>08:00 - 00:00</span></li>
                            <li>Domingo <span>16:00 - 00:00</span></li>
                            <li>Feriado <span>16:00 - 02:00</span></li>
                        </ul>
                        <a href="{{ route('home') }}" class="btn">Reserva</a>
                    </div>

                    <div class="box-email">
                        <p>Informe seu email para receber as novidades e promoções da Casa do Barista</p>
                        <form action="{{ route('home') }}" method="post">
                            <label for="email">Inscreva-se</label>
                            <input type="email" name="email" id="email" placeholder="Informe seu email">
                            <button type="submit" aria-label="enviar">
                                <img src="{{ asset('barista/assets/arrow.svg') }}" alt="Botão Enviar">
                            </button>
                        </form>
                    </div>
                </div>

                <div class="coluna-contato">
                    <h3>Contate-nos</h3>
                    <a class="link-contato" href="mailto:contato@email.com.br">contato@email.com.br</a>
                    <a class="link-contato" href="tel:+5511999999888 ">(11)999-999-888</a>
                    <!-- Rede Social -->
                    <ul class="redeSocial">
                        <li><a href="#" target="_blank"><img src="{{ asset('barista/assets/facebook-24.png') }}" alt="Logo Facebook - Casa do Barista"></a></li>
                        <li><a href="#" target="_blank"><img src="{{ asset('barista/assets/instagram-24.png') }}" alt="Logo Instagram - Casa do Barista"></a></li>
                        <li><a href="#" target="_blank"><img src="{{ asset('barista/assets/linkedin-24.png') }}" alt="Logo Linkedin - Casa do Barista"></a></li>
                        <li><a href="https://wa.me/551199999999" target="_blank"><img src="{{ asset('barista/assets/whatsapp-24.png') }}" alt="Logo Whastapp - Casa do Barista"></a></li>
                    </ul>
                </div>

            </section>
            
            <!-- BARRA FINAL -->
            <div class="barra-final wow animate__animated animate__fadeInUp">
                <p>© 
                    <?php 
                        $data = date('Y');
                        echo $data;
                    ?> 
                - Criado e desenvolvido por TIPI06 - SENAC SMP
                </p> 
            </div>

</footer>