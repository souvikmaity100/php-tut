<?php
$msg =  "A quick brown fox jumps over the lazy dog.";

// Get a substring starting from the 6th character up to the 20th character
// $substring = substr($msg, 5, 15);
// $substring = substr($msg, -10);
$substring = substr($msg, 10);

// echo $substring;
?>

<?php
$string = 'This is a test string.';
$search = 'test';
$replace = 'new_value';

$newString = str_replace($search, $replace, $string);

// echo $newString;
// Output: 'This is a new_value string.'
?>

<?php
$string2 = 'This is a test string. hello';
$search2 = ['test' ,'string'];
$replace2 = ['NEW-VALUE', 'ANOTHER-ONE'];

$newString2 = str_replace($search2, $replace2, $string2);

// echo $newString2;
// Output: 'This is a new_value string.'
?>

<?php
$string3 = 'This is a test string with multiple occurrences.';
$pattern3 = '/test/';
$replace3 = 'new_value';

$newString3 = preg_replace($pattern3, $replace3, $string3);

// echo $newString3;
// Output: 'This is a new_value string with new_value occurrences.'
?>

<?php
$string4 = 'This is a test string.';

$start4 = 11; // Starting position (11th character)
$length4 = 4; // Length of the substring
$replace4 = 'new_value'; // Replacement string

// Extract the substring and replace it
$substring4 = substr($string4, $start4, $length4);
$newString4 = str_replace($substring4, $replace4, $string4);

// echo $newString4;
// Output: 'This is a new_value string.'
?>

<?php
$string5 = 'abc';
$from = 'ab';
$to = 'AB';
$newString5 = strtr($string5, $from, $to);
// echo  $newString5;
// $newString will be 'ABc'
?>

<?php
$string6 = 'This is a test string.';
$replacements6 = [
    't' => 'T',
    's' => 'S',
    'e' => 'E',
    ' ' => '_',
];

$newString6 = strtr($string6, $replacements6);

echo $newString6;
// Output: 'ThIs_Is_A_TeSt_StRiNg.'
?>