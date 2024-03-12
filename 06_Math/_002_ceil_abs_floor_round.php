<?php
$number = -5;

$abs_value = abs($number);

echo $abs_value;
// Output: 5
?>

<?php
$number2 = 5.3;

$ceil_value = ceil($number2);

echo $ceil_value;
// Output: 6
?>

<?php
$number3 = 5.7;

$floor_value = floor($number3);

echo $floor_value;
// Output: 5
?>

<?php
$number4 = 5.345;

$rounded_value = round($number4, 2);

echo $rounded_value;
// Output: 5.35
?>

<?php
$number5 = 5.345;

$rounded_value = round($number5, 2, PHP_ROUND_HALF_DOWN);

echo $rounded_value;
// Output: 5.34
?>

<!-- PHP_ROUND_HALF_UP: Rounds half to away from zero (default).
PHP_ROUND_HALF_DOWN: Rounds half to zero.
PHP_ROUND_HALF_EVEN: Rounds half to even.
PHP_ROUND_HALF_ODD: Rounds half to odd. -->