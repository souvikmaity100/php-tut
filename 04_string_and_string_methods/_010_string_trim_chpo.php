<?php
$string = "  Hello, World!  \n";

$trimmed_string = trim($string);

// echo $trimmed_string;
// Output: Hello, World!
?>

<?php
$string2 = "//**Hello, World!//**";

$trimmed_string2 = trim($string2, "/*");

echo $trimmed_string2;
// Output: Hello, World!
?>


<?php

$chopped_string = chop($string2,  "/*");
$rtrimmed_string = rtrim($string2, "/*");

// echo $string3."<br>";
echo "Chop: {$chopped_string} <br>";
echo "Rtrim: {$rtrimmed_string} <br>";
// Output:
// Chop: //**Hello, World!
// Rtrim: //**Hello, World!
// Trim: Hello, World!
?>