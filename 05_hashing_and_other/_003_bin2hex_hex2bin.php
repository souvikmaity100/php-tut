<?php

$msg = "Hello World";

$hex = bin2hex( $msg ); // Convert the string to hexadecimal representation

echo $hex;

$original_msg = hex2bin($hex);

echo  "<br>Original Message: ". $original_msg;

?>