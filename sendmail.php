<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	try 
	{
		$mail->SMTPDebug = 0;									 
		$mail->isSMTP();										 
		$mail->Host	 = 'smtp.gmail.com;';				 
		$mail->SMTPAuth = true;							 
		$mail->Username = '14dhirajprajapati@gmail.com';				 
		$mail->Password = 'pulp cvqk ymke szsg';					 
		$mail->SMTPSecure = 'tls';							 
		$mail->Port	 = 587; 

		$mail->setFrom('14dhirajprajapati@gmail.com', 'Dhiraj Prajapati');		 
		$mail->addAddress($_POST['exampleInputEmail1']);
		
		$mail->isHTML(true);								 
		$mail->Subject = $_POST['subject'];
		$mail->Body = $_POST['message'];
		$mail->send();
		echo "Mail has been sent successfully!";
	} 
	catch (Exception $e) 
	{
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}


?>
