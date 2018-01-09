<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require 'PHPMailerAutoload.php';

// to
$to="alagirivimal@gmail.com";
// subject
$subject = 'Birthday Reminders for August';
// message
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>
  <p>Here are the birthdays upcoming in August!</p>
  <table>
    <tr>
      <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
    </tr>
    <tr>
      <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

$mail = new PHPMailer;

$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Mailer = 'smtp';
$mail->Host = 'atlantis.netspaceindia.com'; 
$mail->SMTPAuth = true;
$mail->Port= "465";
$mail->Username = 'noreply@saliceexim.com';
$mail->Password = 'NoReply@2016';
$mail->SMTPSecure = 'ssl';
$mail->From = 'alagirivimal2016@gmail.com';
$mail->FromName = 'Alagirivimal2016';
$mail->addAddress($to, 'Alagiri');
$mail->addReplyTo($to, 'Alagiri');
$mail->WordWrap = 50;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body    = $message;
//echo !extension_loaded('openssl')?"Not Available":"Available";
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}


/*
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "alagirivimal2016@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "alagiri@2016";
//Set who the message is to be sent from
$mail->setFrom('alagirivimal2016@gmail.com', 'Alagiri 2016');
//Set an alternative reply-to address
$mail->addReplyTo('noreply@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('alagirivimal@gmail.com', 'Alagiri');
//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body = 'This is a plain-text message body';
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
*/
?>	