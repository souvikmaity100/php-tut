<?php
$string = '<script>alert("Hello, World!");</script><p>Hello, World!</p>';

$clean_string = strip_tags($string);

echo $clean_string;
// Output: Hello, World!
?>

<?php
$string2 = '<script>alert("Hello, World!");</script><b>Hello, World!</b>';

$clean_string2 = strip_tags($string2, '<b>');

echo $clean_string2;
// Output: <p>Hello, World!</p>
?>

<?php
$string3 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum.';

$wrapped_string = wordwrap($string3, 20, "<br>");

echo $wrapped_string;
// Output: Lorem ipsum dolor sit amet,
// consectetur adipiscing elit.
// Maecenas faucibus mollis interdum.
?>

<?php
$string4 = 'Lorem ipsum dolor sit amet';

$wrapped_string2 = wordwrap($string4, 4, "<br>", TRUE);

echo $wrapped_string2;

?>