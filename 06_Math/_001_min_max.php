<?php
$numbers = [5, 3, 8, 1, 9, 2];

$min_value = min($numbers);

echo $min_value;
// Output: 1
?>

<?php
$numbers2 = [5, 3, 8, 1, 9, 2];

$max_value = max($numbers2);

echo $max_value;
// Output: 9
?>

<?php
$strings = ['apple', 'banana', 'cherry', 'date'];

$min_string = min($strings);

echo $min_string;
// Output: apple

$max_string = max($strings);

echo $max_string;
// Output: date
?>

<?php
$min_value = min(5, 3, 8, 1, 9, 2);

$max_value = max(5, 3, 8, 1, 9, 2);

echo $min_value;
// Output: 1

echo $max_value;
// Output: 9
?>