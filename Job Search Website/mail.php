<?php
// the message
$name =($_POST['name']);
$email=($_POST['email']);

$msg = "Hello we will get to you soon with suitable job" ;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("$email","My subject",$msg);
?>