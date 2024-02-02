<?php
// Passing Argument by Value
function testing($string) {
$string .= " and something extra.";
}
$str = "This is a string";
testing($str);
echo $str;
echo "<br>";
?>

<?php
// Passing Argument by Reference(Address in disk)
function testing2(&$string2) {
$string2 .= " and something extra.";
}
$str2 = "This is a string";
testing2($str2);
echo $str2;
?>