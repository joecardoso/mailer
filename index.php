<?php

				require 'PHPMailerAutoload.php';



$mail = new PHPMailer;

                       
//$mail->SMTPDebug = 3;                 // Habilita modo debug na saída
$mail->isSMTP();                        // Setar o uso do SMTP
$mail->Host = 'smtp.dominio.com.br';  	// Servidor smtp 
$mail->SMTPAuth = true;                 // Habilita a autenticação do form
$mail->Username = 'email@email.com.br';       // Conta de e-mail que realizará o envio
$mail->Password = 'senha@senha';       // Senha da conta de e-mail
//$mail->SMTPSecure = 'tls';            // Habilitar uso do TLS (plesk 11.5 ou utilizando contas do Gmail)
$mail->Port = 587;                       // Porta de conexão 
$mail->From = 'email@email.com.br'; 			// e-mail From deve ser o mesmo de "username" (contadeEmail)
$mail->FromName = 'Teste'; 				// Nome que será exibido ao receber a mensagem. 
$mail->addAddress('e-mail que recebera o teste', 'nome destinatario'); // Destinatário 
//$mail->addAddress('ellen@example.com');               	// Nome do destinatário
//$mail->addReplyTo('info@example.com', 'Information');  	//Responder para 
//$mail->addCC('cc@example.com'); // Adicionar cópia para o recebimento. 
//$mail->addBCC('bcc@example.com'); // Adicionar cópia oculta para o recebimento.

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Envio autenticado - mesmo from';  //Assunto da Mensagem
$mail->Body    = 'Teste de formulario enviado por Jhonatan da <b>Eveo</b> Envio <b>OK!</b>'; // Corpo da mensagem
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo nl2br ("Mensagem enviada com sucesso! \n Verifique a conta sua caixa postal, <b>não se esqueça de validar o SPAM</b>");
}

?>


