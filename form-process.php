<?php
/**
 * php file part for contact form validate
 *
 * @package Brome - Responsive Portfolio Creative Template
 */
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];		
	$from="From: $name<$email>\r\nReturn-path: $email";
	$subject="Brome - Responsive Portfolio Creative Template";
	mail("shahadat.cse12@yahoo.com", $subject, $message, $from)
?>
   

