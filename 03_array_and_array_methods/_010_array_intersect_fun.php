<?php
    
/*
    • array_intersect()
    • array_intersect_key()
    • array_intersect_assoc()
    • array_intersect_uassoc()
    • array_intersect_ukey()
    • array_intersect()
    • array_uintersect_assoc()
    • array_uintersect_uassoc()
*/



$a1 = array ("a"=>"red", "b"=> "green", "c"=> "blue", "d"=> "yellow");
$a2 = array ("a"=>"red", "f"=>"green", "d"=> "purple");
$a3 = array("a"=>"Red", "b"=>"black", "h"=>"yellow");

// match value
// $n1 = array_intersect($a1, $a2);
$n1 = array_intersect($a1, $a2, $a3);
print_r($n1);

echo "<br><br>";

// match key
$n2 = array_intersect_key($a1, $a2);
print_r($n2);

echo "<br><br>";

// match key and value both
$n3 = array_intersect_assoc($a1, $a2);
print_r($n3);

echo "<br><br>";


function abcd($a, $b){
    if($a === $b){
    return 0;
    }
    return ($a > $b)? 1 : -1;
    }
function comval($a, $b){
    if($a === $b){
    return 0;
    }
    return ($a > $b)? 1 : -1;
    }

// u means user define function
// $n4 = array_intersect_uassoc($a1, $a2, "abcd");
$n4 = array_intersect_uassoc($a3, $a2, "strcasecmp"); # strcasecmp: is a default function to cpmpare char case
print_r($n4);

echo "<br><br>";

$n5 = array_intersect_ukey($a1, $a2, "abcd");
print_r($n5);

echo "<br><br>";

$n6 = array_uintersect($a1, $a2, "abcd");
print_r($n6);

echo "<br><br>";

$n7 = array_uintersect_uassoc($a1, $a2, "abcd", "comval");
print_r($n7);

echo "<br><br>";
?>