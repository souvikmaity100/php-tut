<?php

$a = "a quick brown fox";

// $exparr = explode(" ", $a);
// $exparr = explode(" ", $a, 3);
$exparr = explode(" ", $a, -1);


print_r($exparr);
echo "<br>";



$newarr = array('hello', 'how', 'are', 'you');

// $str = implode(' ', $newarr);
$str = implode(' ', $newarr);

print_r($str);

?>