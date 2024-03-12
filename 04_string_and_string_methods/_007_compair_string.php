<?php
$string1 = 'apple';
$string2 = 'apple';

$result = strcmp($string1, $string2);

if ($result == 0) {
    echo "The strings are equal.";
} else {
    echo "The strings are not equal.";
}
// Output: The strings are equal.
?>

<?php
$string3 = 'apple';
$string4 = 'apricot';

$length = 2;
$result2 = strncmp($string3, $string4, $length);

if ($result2 == 0) {
    echo "The substrings are equal.";
} else {
    echo "The substrings are not equal.";
}
// Output: The substrings are equal.

$length2 = 4;
$result3 = strncmp($string3, $string4, $length2);

if ($result3 == 0) {
    echo "The substrings are equal.";
} else {
    echo "The substrings are not equal.";
}
// Output: The substrings are not equal.
?>


<?php
$stringA = 'file10';
$stringB = 'file2';
$stringC = 'file1';

$resultA = strnatcmp($stringA, $stringB);
$resultB = strnatcmp($stringB, $stringC);
$resultC = strnatcmp($stringA, $stringC);

echo "Result A: $resultA <br>";
echo "Result B: $resultB <br>";
echo "Result C: $resultC <br>";
// Output:
// Result A: 1
// Result B: -1
// Result C: 1
?>

<?php
$string1A = 'apple';
$string2A = 'banana';

$start = 0;
$length = 3;
$result = substr_compare($string1A, $string2A, $start, $length);

echo $result;
// Output: -1
?>