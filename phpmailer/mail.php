

<?php 



use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;



//Load Composer's autoloader

require 'autoload.php';




// $phrase=$_POST['phrase'];
// $attribu=$_POST['attribu'];


$Name = $_POST['name'];
$Email = $_POST['email'];
 $Subject = $_POST['subject'];
 $Message = $_POST['message'];

echo  $Email;




// Instantiation and passing `true` enables exceptions





//Instantiation and passing `true` enables exceptions

$mail = new PHPMailer(true);



try {

    //Server settings

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

    $mail->isSMTP();                                            //Send using SMTP

    $mail->Host       = 'corammers.com';                     //Set the SMTP server to send through

    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    $mail->Username   = 'ilan@corammers.com';                     //SMTP username

    $mail->Password   = '@J=+Fi}xGh3A';                               //SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged

    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above





     

   //Recipients

    $mail->setFrom('ilan@corammers.com', 'Corammers');

    $mail->addAddress('zaidiposwal@gmail.com', 'CleanTopia');     //Add a recipient
    // $mail->addAddress('khurram.akram43@gmail.com', 'CleanTopia');     //Add a recipient

    $mail->addAddress('ilan@corammers.com');               //Name is optional

    $mail->addReplyTo('ilan@corammers.com', 'Corammers');

    $mail->addCC('cc@example.com');

    $mail->addBCC('bcc@example.com');





    // Content

    $mail->isHTML(true); // Set email format to HTML




	$mail->Subject = 'New Submission';

   $mail->Body    = '<b>Name :'.$Name'</b><br> <b>Email:'.$Email'</b><br><b>Subject:'.$Subject'</b><br><b>Message :'.$Message'</b><br>';








    



    $mail->send();

    echo 'Email Has Been Sent';

} catch (Exception $e) {

    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}













?>