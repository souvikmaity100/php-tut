<?php

$msg = "Hello world";

$encode_msg =  convert_uuencode( $msg );

echo "encode message: ". $encode_msg;

$decode_msg = convert_uudecode($encode_msg);

echo  "<br> decode message: ". $decode_msg ;

?>