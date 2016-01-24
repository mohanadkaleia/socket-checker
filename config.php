<?php

	// SMTP server information                                      
	$SMTPHost = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$username = 'ms.kaleia@gmail.com';                 // SMTP username
	$password = 'mk1988123';                           // SMTP password
	$SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$SMTPPort = 587;      

	// Server information
	$server = "127.0.0.1";
	$port = "9001";

	// Message information
	$fromAddress = "ms.kaleia@gmail.com";
	$toAddress = "ms.kaleia@gmail.com";
	$subject = "Weather socket 9001 closed!";
	$body = "The socket " . $server . ":" . $port . "has been closed at " . date('Y-m-d H:i:s');