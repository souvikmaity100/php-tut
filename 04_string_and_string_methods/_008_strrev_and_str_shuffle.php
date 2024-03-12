<?php
$string = '12345';

$reversed = strrev($string);

echo $reversed;
// Output: 54321
?>

<?php
$string2 = '12345';

$shuffled = str_shuffle($string2);

echo $shuffled;
// Output (example): 21354
?>