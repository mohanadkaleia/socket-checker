<?php

	/**
	 * send_mail.php 
	 *
	 * @package    PackageName
	 * @author     Mohanad Kaleia <ms.kaleia@gmail.com>
	 * @license    MIT
	 * @version    1.0
	 * @link       https://github.com/mycodee/socket-checker
	 * @since      1/24/2016
	 */


require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
require 'config.php';
$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $SMTPHost;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $username;                 // SMTP username
$mail->Password = $password;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = $SMTPPort;                                    // TCP port to connect to

$mail->setFrom($fromAddress, 'Socket chekcer');
$mail->addAddress($toAddress, '');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}