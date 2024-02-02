<!-- (condition)? true statement: false statement -->

<?php
$x = 15;
$z = ($x > 20)? "Greater" : "Smaller";
echo $z;
?>

<?php
$x = 15;
$z = $x > 20 ? "Greater" : "Smaller";
echo $z;
?>

<?php
$x = 15;
$z = "z is ". ($x > 20 ? "Greater" : "Smaller")."than x";
echo $z;
?>