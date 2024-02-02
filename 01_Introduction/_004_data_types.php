<?php

/* PHP Data Types
1. String
2. Integer
3. Float 
4. Boolean
5. Object 
6. Array
7. null
*/

$x = "Hello World"; # String
$x = 25; # Integer
$x = 30.50; # Float
$x = true; # Boolean
$x = array("HTML","CSS","JS"); # Array
$x = null; # Null

// String
$name = "souvik";
$friend = "Pintu";
echo "$name ka friend hai $friend";
echo $name ."ka friend hai". $friend;
echo "<br>";

// Integer
$income = 500;
$debts = -12;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Float - Decimal point number
$income = 120.6;
$debts = -12.2;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolen - true or false
$x = true;
$y = false;
print_r($x);
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($y);
echo "<br>";

// Array
$friends = array("Pintu", "Shyama", "Suman", "Subrata", 12, null, true);
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[5];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

?>