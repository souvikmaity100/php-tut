<?php
$string = 'Hello';
$pad_length = 20;
$pad_string = '.';
$pad_side = STR_PAD_BOTH;

$padded_string = str_pad($string, $pad_length, $pad_string, $pad_side);

echo $padded_string;
// Output (example):              Hello    

// $pad_type: The side of the string to pad. Valid options are:
// STR_PAD_RIGHT (default): Pads to the right.
// STR_PAD_LEFT: Pads to the left.
// STR_PAD_BOTH: Pads to the left and right, dividing the padding evenly.
?>

<?php
$newString2 = 'Hello';
$repeat_count = 3;

$repeated_string = str_repeat($string2, $repeat_count);

echo $repeated_string;
// Output: HelloHelloHello
?>