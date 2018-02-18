<?php

// example on using PHPMailer with GMAIL

include("class.phpmailer.php");
include("class.smtp.php"); // note, this is optional - gets called from main class if not already loaded
$fname = strip_tags($_POST['fname']);
$lname = strip_tags($_POST['lname']);
$name = $fname.' '.$lname;
$address = htmlentities($_POST['address']);
$phone = strip_tags($_POST['phone']);
$fax = strip_tags($_POST['fax']);
$email = strip_tags($_POST['email']);
$comment = htmlentities($_POST['comment']);
$subject = "Karavan Liquors Contact Us Enquiry From Website";
$mail = new PHPMailer();

//$body             = '$name''$email''$message';
//$body             = eregi_replace("[\]",'',$body);


$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
if (($address) != '') {
    $message .= "<tr><td><strong>Address:</strong> </td><td>" . $address . "</td></tr>";
}
$message .= "<tr style='background: #eee;'><td><strong>Phone:</strong> </td><td>" . $phone . "</td></tr>";
if (($fax) != '') {
$message .= "<tr style='background: #eee;'><td><strong>Fax:</strong> </td><td>" . $fax . "</td></tr>";
}
$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
if (($comment) != '') {
    $message .= "<tr><td><strong>Comments:</strong> </td><td>" . $comment . "</td></tr>";
}

$message .= "</table>";
$message .= "</body></html>";



$body             = $message;

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
//$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.mailtrap.io";  
//$mail->Host       = "smtp.gmail.com";     // sets GMAIL as the SMTP server
//$mail->Port       = 465;                   // set the SMTP port
$mail->Port       = 2525; 

//$mail->Username   = "yourname@gmail.com";  // GMAIL username
$mail->Username   = "3206b5216aa494";
//$mail->Password   = "password";            // GMAIL password
$mail->Password   = "9598a18537774a";

$mail->From       = "$email";
$mail->FromName   = "$name";
$mail->Subject    = "$subject";
$mail->AltBody    = "$message"; //Text Body
// $mail->WordWrap   = 50; // set word wrap

$mail->MsgHTML($body);

$mail->AddReplyTo("$email","$name");

//$mail->AddAttachment("/path/to/file.zip");             // attachment
//$mail->AddAttachment("/path/to/image.jpg", "new.jpg"); // attachment

$mail->AddAddress("tino77777777@gmail.com","Karavan Liquors");

$mail->IsHTML(true); // send as HTML

if(!$mail->Send()) {
	header("Location: ../contact-us.php?status=500");
  	// echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	// echo "OK";
	header("Location: ../contact-us.php?status=200");
}

?>
