<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

function email($email,$emailName,$subject,$template,$userno)
{
	ob_start(); 
include("$template");
	$msg = ob_get_clean();
	$mail = new PHPMailer;
	//$mail->isSMTP(); 
	$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
	$mail->Host = "ignite-synergy.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
	$mail->Port = 465; // TLS only
	$mail->SMTPSecure = 'tls'; // ssl is depracated
	$mail->SMTPAuth = true;
	$mail->Username = "info@ignite-synergy.com";//$smtpUsername;
	$mail->Password = "Myemail@246810";//$smtpPassword;
	$mail->setFrom("info@ignite-synergy.com", "info@ignite-synergy.com");
	$mail->addAddress($email, $emailName);
	$mail->Subject ="info@ignite-synergy.com";
	$mail->msgHTML($msg); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
	$mail->AltBody = 'HTML messaging not supported';
	// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

	if(!$mail->send()){




	    return $mail->ErrorInfo;
	}else{
                
		$sqlm="insert into email_status(emailid,content,status)values('$email','email content','succesfully')";
$root="dd";
	
	if (mysqli_query($connection, $sqlm)) {
          
$root="fail";
		
	}
$dd="true";

	    return $root;
	}
}






?>