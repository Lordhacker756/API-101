<?php
include('smtp/PHPMailerAutoload.php');
include('../token.php');

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "smtp.hostinger.com";
	$mail->Port = 465; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "api@3pixelsonline.in";
	$mail->Password = "*Utk123rsh#";
	$mail->SetFrom("api@3pixelsonline.in");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
};

if (!isset($status)) //If API key is not provided it will be set
{
//It is not set that means the key was provided
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Date = $_POST['Date'];
$Choice = $_POST['Choice'];

$status = "true";
$data = "Email Sent Successfuly!";
$code = "8";

$html="Hello Mr ".$Name." Nice to meet you \n"."Here are your details \n"."Phone ".$Phone."\n"."Email ".$Email."\n"."Date ".$Date."\n"."Choice ".$Choice."\n";

echo smtp_mailer($Email,'API Testing',$html);
}

else
{
    $status = "true";
	$data = "Please Provide A Valid API Key";
	$code = "7";
}

echo json_encode(["status" => $status, "data" => $data, "code" => $code]);

?>