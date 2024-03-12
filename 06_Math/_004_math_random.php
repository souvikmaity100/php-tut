<?php
$min = 1;
$max = 10;

$random_number = rand($min, $max);

echo $random_number."<br>";
// Output: A random number between $min and $max.
?>

<?php
$min2 = 1;
$max2 = 10;

$random_number2 = mt_rand($min2, $max2);

echo $random_number2."<br>";
// Output: A random number between $min and $max.


echo mt_rand()."<br>";  // Output: A random number between 0 and mt_getrandmax()
?>

<!-- In this example, the mt_rand() function generates a random integer (a number between $min and $max) using the Mersenne Twister algorithm. -->

<?php
$random_number3 = lcg_value();

echo $random_number3."<br>";
// Output: A random floating-point number between 0 and 1.
?>