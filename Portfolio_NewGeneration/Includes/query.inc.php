<?php
require 'PHPMailer/PHPMailerAutoload.php';

if (isset($_POST['query'])) {
	$mail = new PHPMailer();

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'muninder.kaur06@gmail.com';                 // SMTP username
$mail->Password = 'FuckLove0602';  
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('inderpalsingh@newgeneration.co.in', 'Owner');     // Add a recipient

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment($uploadfile, 'Image');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "New Query for New Generation";
$mail->Body = 'Name: <b>'.$_POST['name'].'</b><br>Email id: <b>'. $_POST['email'].'</b><br>Contact number:<b> '.$_POST['number'].'</b><br>Has the following query:<b> '.$_POST['msg'].'</b>';
$mail->Body .= '<br><br><br><b><i>This is an automated email service. Please do not respond.</i></b>';

if(!$mail->send()) {
	header("Location:../index.php?ErrorMail");
} else {
	header("Location:../index.php?Success");
}
}

?>