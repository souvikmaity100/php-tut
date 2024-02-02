<?php
$name = "Souvik";
echo $name;
echo "<br>";
echo strrev("hello world");
echo "<br>";
echo "The length of " . "name $name is " . strlen($name);
echo "<br>";

$nam = "Souvik is a good boy";
echo $nam;
echo "<br>";
echo str_word_count($nam);
echo "<br>";
echo strrev($nam);
echo "<br>";
echo strpos($nam, "a");
echo "<br>";
echo str_replace("Souvik","Pintu", $nam);
echo "<br>";
echo str_repeat($name, 5);
echo "<br>";
echo "<pre>";
echo ltrim("      This is L Trimed       ");
echo "<br>";
echo rtrim("      This is R Trimed       ");
echo "<br>";
echo trim("      This is Trimed       ");
echo "</pre>";

echo addcslashes("souvik","k");
echo "<br>";
echo chop("souvik maity","maity");
echo "<br>";
$arr1 = array("hello", "welcome to", "php");
echo join(" abcd ",$arr1);
echo "<br>";
echo printf("hello man");
echo "<br>";
echo strtolower("heLLo");
echo "<br>";
echo strtoupper("HeLLo");
echo "<br>";
echo ucwords("hello world");

$a = "hello";
$a .= " world";
echo $a;

?>