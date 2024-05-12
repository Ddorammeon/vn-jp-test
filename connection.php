<?php
	require './PHPMailer-master/src/Exception.php';
	require './PHPMailer-master/src/PHPMailer.php';
	require './PHPMailer-master/src/SMTP.php';
    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;


	$name = $_POST["name"];
	$phone = $_POST["phone"];

	$mail = new PHPMailer(true);

	$mail->SMTPDebug = 2;
	$mail ->isSMTP();
	$mail ->SMTPAuth = "true";

	$mail ->Host = "smtp.gmail.com";
	$mail ->SMTPSecure = 'ssl';
	$mail ->Port = 465;

	$mail ->Username = "you@gmail.com";
	$mail ->Password = "password";

	$mail ->setFrom($name, $phone);
	$mail ->addAddress("dmon70998@gmail.com", "mon111111");


	$mail->isHTML(true);
	$message = "Name: $name\nEmail: $phone";
	$subject = "New Submission";
	$mail ->send();
	
	echo "Email sent successfully!";

?>