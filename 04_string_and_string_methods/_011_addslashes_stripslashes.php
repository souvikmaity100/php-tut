<?php
$string = 'Hello "World"';

$escaped_string = addslashes($string);

echo $escaped_string;
// Output: Hello \"World\"
?>

<?php
$escaped_string = 'Hello \"World\"';

$unescaped_string = stripslashes($escaped_string);

echo $unescaped_string;
// Output: Hello "World"
?>

<?php
$string2 = 'Hello (World)';

$escaped_string = addcslashes($string2, "()");

echo $escaped_string;
// Output: Hello \(World\)
?>