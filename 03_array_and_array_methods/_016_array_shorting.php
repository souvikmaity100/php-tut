<!-- $a = ["Sanjay","Aman","Rehman", "Karan"];
Aman, Karan, Rehman, Sanjay -> Ascending Order
Sanjay, Rehman, Karan, Aman -> Descending Order
Karan, Rehman, Aman, Sanjay -> Reverse Goslee -->

<?php
/*
• sort : alphabetic sort
• rsort : reverce sort
• arsort : associative array reverce sort
• asort : associative array sort
• krsort : associative array reverce sort by key
• ksort : associative array sort by key
• natcasesort : natural order sort
• natsort : natural order sort
• array_multisort : multipal array sort
• array_reverse : reverce the array
 */
$a = ["Sanjay","Aman","Rehman", "Karan"];
sort($a);
print_r($a);
echo "<br>";

$b = ["Sanjay","Aman","Rehman", "Karan"];
rsort($b);
print_r($b);
echo "<br>";

$food = array("d" => "lemon",
"a" => "orange",
"b" => "banana",
"c" => "apple");

// asort($food);
ksort($food);
print_r($food);
echo "<br>";

$food2 = array("d" => "lemon",
"a" => "orange",
"b" => "banana",
"c" => "apple");

// arsort($food2);
krsort($food2);
print_r($food2);
echo "<br>";


$array1 = array("img12.png", "img10.png", "img2.png", "img15.png");
natsort($array1);
print_r($array1);
echo "<br>";

$array2 = array("Img12.png", "img10.png", "Img2.png", "img15.png");
// natsort($array1);
natcasesort($array2);
print_r($array2);
echo "<br>";

$food = array('orange','banana'); 
$veggie = array('lemon','carrot');

array_multisort($food, $veggie);
print_r($food);
echo "<br>";
print_r($veggie);
echo "<br>";

$nam = ["Sanjay","Aman","Rehman", "Karan"];
$rnam = array_reverse($nam);
print_r($rnam);
?>