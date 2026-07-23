<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;
// email != '';


if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && !empty($_POST['email'])) {


    //Create an instance; passing `true` enables exceptions
    require 'vendor/phpmailer/PHPMailer.php';
    require 'vendor/phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {

        // Pegar as informações do formulário
        // MENSAGENS CHEGAM AQUI
        $nome    = trim($_POST['nome'] ?? '');
        $email   = trim($_POST['email'] ?? '');
        $fone    = trim($_POST['fone'] ?? '');
        $assunto = trim($_POST['assunto'] ?? '');
        $mens    = trim($_POST['mens'] ?? '');
        
        //BANCO DE DADOS
        require_once('admin/ControleContato.php');

        $contato = new ClassContato();
        $contato->nomeContato = $nome;
        $contato->emailContato = $email;
        $contato->foneContato = $fone;
        $contato->assuntoContato = $assunto;
        $contato->mensContato = $mens;

        $contato->inserir();



        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smpsistema.com.br';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tipi06@smpsistema.com.br';                     //SMTP username
        $mail->Password   = 'SMP-Tipi@@06';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('tipi06@smpsistema.com.br', 'Site Casa do Barista'); //QUEM DISPARA O EMAIL
        $mail->addAddress('yuripuzli@gmail.com');     //Add a recipient. QUEM DISPARA O EMAIL   
        // $mail->addAddress('ellen@example.com');       //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = "
            Nome: $nome <br>
            E-mail: $email <br>
            Telefone: $fone <br>
            Assunto: $assunto <br>
            Mensagem: $mens
        ";
        $mail->AltBody = "
            Nome: $nome /n
            E-mail: $email /n
            Telefone: $fone /n
            Assunto: $assunto /n
            Mensagem: $mens
        ";

        $mail->send();
        $ok = 1;
    } catch (Exception $e) {
        echo $nome . ", Não foi possivel enviar sua mensagem. Error: {$mail->ErrorInfo}";
        $ok = 2;
    }

    

}
?>


<section id="contato" class= "contato">
            <h2 class="contato-titulo-pagina">Casa do Barista</h2>
            <h3>
                <?php
                    if($ok == 1){
                        echo $nome . ", sua mensagem foi enviada com sucesso!"; 

                    }elseif($ok == 2){
                        echo $nome , ", não foi possivel enviar sua mensagem";
                    }
                ?>

            </h3>
            <div class="site contato-grid">
                <div>
                    <p>A Casa do Barista nasceu da vontade de unir pessoas através de algo simples e profundo: o ato de compartilhar uma xícara de café.</p>
                    <p>Acreditamos no poder das histórias que começam no campo, passam pelo barista e chegam até você em forma de aroma, sabor e sentimento. </p>
                    <p>Valorizamos pequenos produtores, técnicas artesanais e processos manuais que resgatam o verdadeiro significado do café brasileiro: riqueza cultural, dedicação e tradição.</p>
                </div>
                <div class="contato-cards">
                    <article class="contato-card">
                        <h3>Nosso Endereço</h3>
                        <h4>AV Marechal Tito, 1500 <br> Sao Miguel Paulista</h4>
                    </article>

                    <article class="contato-card">
                        <h3>Nosso Telefone</h3>
                        <a href="tel:5511999998888">(11) 99999-8888</a>
                        <a href="tel:5511999775555">(11) 55555-3333</a>
                    </article>

                    <article class="contato-card">
                        <h3>Nossos E-mails</h3>
                        <a href="jamesmclaren:contato@email.com.br">contato@email.com.br</a>
                        <a href="jamesmclaren:atendimento@email.com.br">atendimento@email.com.br</a>
                    </article>

                    <article class="contato-card">
                        <h3>Siga-nos</h3>ul class="redeSocial contato-redeSocial">
                            <li><a href="#" target="_blank"><img src="assets/facebook-24.png" alt="logo facebook casa do barista"></a></li>
                            <li><a href="#" target="_blank"><img src="assets/instagram-24.png" alt="logo instagram casa do barista"></a></li>
                            <li><a href="#" target="_blank"><img src="assets/linkedin-24.png" alt="logo linkedin casa do barista"></a></li>
                            <li><a href="https://wa.me/5511988662233?text=Ol%C3%A1%21%20Gostaria%20de%20falar%20com%20a%20Casa%20Do%20Barista%20%E2%98%95" target="_blank"><img src="assets/whatsapp-24.png" alt="logo whatsapp casa do barista"></a></li>
                        </ul>
                    </article>
                </div>
                
            </div>

            <div class="contato-col contato-col-fone">
                <h2 class="contato-form-titulo">Formulario de Contato</h2>

                <form class="form-contato" action="#" method="POST">
                    <div class="form-linha">
                        <input type="text" name="nome" placeholder="NOME" required>
                    </div>

                    <div class="form-linha form-linha-dupla"> 
                        <input type="email" name="email" placeholder="E-MAIL" required>
                    </div>

                    <div class="form-linha form-linha-dupla">
                        <input type="tel" name="fone" placeholder="TELEFONE">
                        <select name="assunto">
                            <option value="" disabled selected hidden>ASSUNTO</option>
                            <option value="Eventos">Eventos</option>
                            <option value="Cafe">Cafe</option>
                        </select>
                    </div>

                    <div class="form-linha">
                        <textarea name="mens" cols="30" rows="10" placeholder="MENSAGEM" required></textarea>
                    </div>              <div class="form-linha form-linha-acoes">
                        <button type="submit">ENVIAR MENSAGEM</button>
                        <button type="reset">LIMPAR</button>
                    </div>

                </form>
            </div>
        </section>