<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// configuracao
$smtpUsername = "mail@epbjc-porto.net"; // configuração do utilizador/password que faz o envio do email - não alterar
$smtpPassword = "enviaremailporto";

$nameInpt = $_POST["name_input"];
$emailInpt = $_POST["email_input"];

$emailFrom = "mail@epbjc-porto.net"; // não mudar este email
$emailFromName = $nameInpt . ' | ' . $emailInpt;// configuração do nome aparecer no envio do email

// configuração dos dados para onde o email vai ser enviado
$emailTo = "hprata6@gmail.com";
$emailToName = "GearUP Development Team";

// utilização do PHPMailer
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0; // DEBUG - 0 = off / 1 = client messages / 2 = client and server
$mail->Host = "mail.epbjc-porto.net";
$mail->Port = 465; // porta de ligação SMTP Port: 465
$mail->SMTPSecure = 'ssl'; // protocolo de segurança
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;
$mail->setFrom($emailFrom, $emailFromName);
$mail->addAddress($emailTo, $emailToName);

//array to identify the values of the list and turn them into actual usefull information
$subjectOptions = array(
    "1" => "Technical Problems",
    "2" => "Error Reporting",
    "3" => "Sponsoring Opportunities",
    "4" => "Feedback",
    "5" => "Ask a Question",
    "6" => "Other"
);

$selectedOption = $_POST["subject_input"];
$mail->Subject = isset($subjectOptions[$selectedOption]) ? $subjectOptions[$selectedOption] : "Unknown Subject";
 // configuração do assunto / subject
$email = $_POST["message_input"];
$mail->msgHTML($email); // config da msg
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //enviar imagem em anexo

// enviar o email e mostrar msg de sucesso ou erro
if (!$mail->send()) {
    echo "Erro no envio de mensagem: " . $mail->ErrorInfo;
} else {
    header("Location: https://epbjc-porto.net/gearup");
    exit();
}

?>