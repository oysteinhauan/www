<?php
   require("php/PHPMailerAutoload.php"); // path to the PHPMailerAutoload.php file.

   $mail = new PHPMailer();
   $mail->IsSMTP();
   $mail->Mailer = "smtp";
   $mail->Host = "email-smtp.us-east-1.amazonaws.com";
   $mail->SMTPSecure = 'tls';
   $mail->Port = "587"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
   $mail->SMTPAuth = true;
   $mail->SMTPDebug = 1;
   $mail->IsHTML(true);
   $mail->Username = "AKIAI6QIWAF6XJQT2FEQ";
   $mail->Password = "AgI86lg6cpg/qntNj+NwShyjl+fxmdnA1Yc+nwXNIjpU";

   $mail->From     = "oysteinbhauan@gmail.com";
   $mail->FromName = "Svar på invitasjon";
   $mail->AddAddress("invitasjon@ingridogjoakim.no", "Ingrid og Joakim");
   $mail->AddReplyTo("invitasjon@ingridogjoakim.no", "Ingrid og Joakim");

   $sender = $_POST['Gjest 1'];
   $mail = $_POST['E-Post'];
   $sleepover1 = $_POST['Gjest 1 overnatting'];
   $guest2 = $_POST['Gjest 2'];
   $sleepover2 = $_POST['Gjest 2 overnatting?'];
   $guest3 = $_POST['Gjest 3'];
   $sleepover3 = $_POST['Gjest 3 overnatting?'];
   $guest4 = $_POST['Gjest 4'];
   $sleepover4 = $_POST['Gjest 4 overnatting?'];
   $guest5 = $_POST['Gjest 5'];
   $sleepover5 = $_POST['Gjest 5 overnatting?'];
   $guest6 = $_POST['Gjest 6'];
   $sleepover6 = $_POST['Gjest 6 overnatting?'];


   $mail->Subject  = "$sender har svart på invitasjonen!";
   $mail->Body     = "E-Posten til $sender er $mail";
   $mail->WordWrap = 50;

   if(!$mail->Send()) {
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
		exit;
   } else {
		echo 'Message has been sent.';
   }
?>
Ste