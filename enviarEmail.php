
        <?php
		$nome       = $_POST['nome'];
        $email      = $_POST['email'];
        $telefone   = $_POST['telefone'];
        $assunto    = $_POST['assunto'];
		$mensagem   = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "emerson@websoftware.com.br");
        $subject = "Contato do site";
        $to = new SendGrid\Email(null, "emerson8406@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá Igor,<br><br>Nova mensagem de contato<br><br><b>Nome:</b> $nome<br><b>Email:</b> $email<br><b>Telefone:</b> $telefone<br><b>Assunto:</b> $assunto  <br><b>Mensagem:</b> $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        //echo "Mensagem enviada com sucesso";
        if($response){
            echo "E-MAIL ENVIADO COM SUCESSO! <br> Em breve responderemos no e-mail enviado";
            } else {
            $mgm = "ERRO AO ENVIAR E-MAIL!";
            echo "";
            }
		
        ?>


