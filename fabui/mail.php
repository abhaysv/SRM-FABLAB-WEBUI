<?php

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
ini_set("include_path", '/home2/siicserv/php:' . ini_get("include_path") );

require_once "Mail.php";

$host = "tsl://smtp.zoho.com";
$username = "no-reply@srmiic.com";
$password = "Killmedude@123";
$port = "587";
$to = "monuabhaysv@gmail.com";
$email_from = "no-reply@srmiic.com";
$email_subject = "Test email" ;
$email_body = "email is for test" ;
$email_address = "systems@srmiic.com";

$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
$mail = $smtp->send($to, $headers, $email_body);


if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>