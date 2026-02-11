<?php

include('smtp/PHPMailerAutoload.php');



function smtp_mailer($to,$subject, $msg){

	$mail = new PHPMailer(); 

	$mail->SMTPDebug  = 3;

	$mail->IsSMTP(); 

	$mail->SMTPAuth = true; 

	$mail->SMTPSecure = 'tls'; 

	$mail->Host = "216.10.241.228";

	$mail->Port = 587; 

	$mail->IsHTML(true);

	$mail->CharSet = 'UTF-8';

	$mail->Username = "contact@ketonelaminates.com";

	$mail->Password = "contact@1234567890";

	$mail->SetFrom("contact@ketonelaminates.com");

	$mail->Subject = $subject;

	echo $mail->Body =$msg;

	$mail->AddAddress($to);

	$mail->SMTPOptions=array('ssl'=>array(

		'verify_peer'=>false,

		'verify_peer_name'=>false,

		'allow_self_signed'=>false

	));

	if(!$mail->Send()){

		 $mail->ErrorInfo;

	}else{

	

	}

}

?>