<?php

/**

 * This example shows settings to use when sending via Google's Gmail servers.

 * This uses traditional id & password authentication - look at the gmail_xoauth.phps

 * example to see how to use XOAUTH2.

 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.

 */

//Import PHPMailer classes into the global namespace

// require("PHPMailer.php");

// require("SMTP.php");

// require("Exception.php");

// require("OAuth.php");



require ( dirname(__FILE__).'/../wp-load.php' );

require_once dirname(__FILE__)."/PHPMailerAutoload.php";



$nome = $_POST['nome'];

$empresa = $_POST['empresa'];

$email = $_POST['email'];

$telefone = ($_POST['telefone']) ? $_POST['telefone'] : '-';

$mensagem = $_POST['mensagem'];

//

$assunto = 'Contato - Site'. PHP_EOL . PHP_EOL;
$message = '<br/>Empresa: '.$empresa. PHP_EOL . PHP_EOL;
$message = '<br/>Telefone de contato: '.$telefone. PHP_EOL . PHP_EOL;

$message .= '<br><hr>Mensagem:<br>'.$mensagem. PHP_EOL . PHP_EOL;



$mail = new PHPMailer;

$mail->setFrom($email, $nome);

// $mail->setFrom('noreply@original123.com.br', 'Original123');

$mail->addAddress('wesandradealves@gmail.com', 'Wesley Andrade');

// $recipients = array(
//     'wesandradealves@gmail.com' => 'Wesley Andrade'
// );


// foreach($recipients as $email => $name)

// {

//    $mail->AddBCC($email, $name);

// }


$mail->Subject = $assunto;

$mail->isHTML(true);

$mail->Body    = $message;

$mail->AltBody = 'This is a plain-text message body';

$mail->CharSet = 'UTF-8';



// $mail->send();



if($mail->send()){

    header("Location: ".$_SERVER['HTTP_REFERER']);     

}





// // use PHPMailer\PHPMailer\PHPMailer;

// //Create a new PHPMailer instance

// $mail = new PHPMailer;

// //Tell PHPMailer to use SMTP

// $mail->isSMTP();

// //Enable SMTP debugging

// // 0 = off (for production use)

// // 1 = client messages

// // 2 = client and server messages

// $mail->SMTPDebug = 0;

// //Set the hostname of the mail server

// // $mail->Host = 'smtp.kinghost.net';

// $mail->Host = 'smtp.gmail.com';

// // use

// // $mail->Host = gethostbyname('smtp.kinghost.net');

// // if your network does not support SMTP over IPv6

// //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission

// $mail->Port = 587;

// //Set the encryption system to use - ssl (deprecated) or tls

// $mail->SMTPSecure = 'tls';

// //Whether to use SMTP authentication

// $mail->SMTPAuth = true;

// //Username to use for SMTP authentication - use full email address for gmail

// $mail->Username = 'wesandradealves@gmail.com';

// $mail->Password = 'Wes@03122530';

// $mail->AddBCC('luiz.sd@gmail.com', 'Luiz Evangelista');

// //Set who the message is to be sent from

// $mail->setFrom($email, $nome);

// //Set an alternative reply-to address

// $mail->addReplyTo($email, $nome);

// //Set who the message is to be sent to

// $mail->addAddress('wesandradealves@gmail.com', $assunto);

// //Set the subject line

// $mail->Subject = $assunto;

// //Read an HTML message body from an external file, convert referenced images to embedded,

// //convert HTML into a basic plain-text alternative body

// // $mail->msgHTML(file_get_contents('contents.html'), __DIR__);

// $mail->Subject = $assunto;

// $mail->Body    = $message;

// $mail->isHTML(true);

// $mail->CharSet = 'UTF-8';

// //Replace the plain text body with one created manually

// $mail->AltBody = 'This is a plain-text message body';

// //Attach an image file

// // $mail->addAttachment('images/phpmailer_mini.png');

// //send the message, check for errors

// if (!$mail->send()) {

//     echo "Mailer Error: " . $mail->ErrorInfo;

// } else {

//     print_r($mail);

//     // header('Location: ' . $_SERVER['HTTP_REFERER']."?sent=true");

//     //Section 2: IMAP

//     //Uncomment these to save your message in the 'Sent Mail' folder.

//     if (save_mail($mail)) {

//       echo "Message saved!";

//     }

// }

// //Section 2: IMAP

// //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php

// //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php

// //You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can

// //be useful if you are trying to get this working on a non-Gmail IMAP server.

// function save_mail($mail)

// {

//     //You can change 'Sent Mail' to any other folder or tag

//     $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

//     //Tell your server to open an IMAP connection using the same username and password as you used for SMTP

//     $imapStream = imap_open($path, $mail->Username, $mail->Password);

//     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());

//     imap_close($imapStream);

//     return $result;

// }

?>