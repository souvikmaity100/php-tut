<?php
/*
Operators in PHP
1. Arithematic Operators
2. Assignment Operators
3. Comparion Operatoers
4. Logical Operators
*/

// Arithematic Operators
//   Operator    Description
//      +        Addition
//      -        Subtraction
//      *        Multiplication
//      /        Division
//      **       Exponentiation
//      %        Modulus (Remainder)
//      ++       Increment Operator
//      --       Decrement Operator
$a = 45;
$b = 4;
echo "$a"." + "."$b"." = ".($a + $b)."<br>";
echo "$a"." - "."$b"." = ".($a - $b)."<br>";  
echo "$a"." * "."$b"." = ".($a * $b)."<br>";  
echo "$a"." / "."$b"." = ".($a / $b)."<br>";  
echo "$a"." % "."$b"." = ".($a % $b)."<br>";  
echo "$a"." ** "."$b"." = ".($a ** $b)."<br>";  

// Assignment Operators
//    Operator   Example    Same As
//      =        x = y      x = y
//      +=       x + = y    x= x + y
//      -=       x = y      X = X - Y
//      *=       x *= y     x=x*y
//      /=       x/= y      x = x/y
//      %=       x %= y     x = x % y
//      **=      x **= y    x = x ** y
$x = $a;
echo "The value of x is ".$x."<br>";
$a += 10;
echo "Now the value of a is ".$a."<br>";
$b -= 5;
echo "Now the value of b is ".$b."<br>";
$a *= 7;
echo "Now the value of a is ".$a."<br>";
$a /= 6;
echo "Now the value of a is ".$a."<br>";
$a %= 5;
echo "Now the value of a is ".$a."<br>";

// Comparion Operatoers: return true: "1" or False: ""
// Operator Description
// ==       Equal to                    $x == $y
// ===      Equal value and equal type  $x === $y
// !=       Not equal                   $x != $y
// <>       Not equal                   $x <> $y
// !==      Not equal value or not equal type $x !== $y
// >        Greater than                $x > $y
// >        Less than                   $x < $y
// >=       Greater than or equal to    $x >= $y
// <=       Less than or equal to       $x <= $y
$x = 7;
$y = 9;
$z = 7;
echo "For x == y the result is ";
echo var_dump($x == $y)."<br>";

echo "For x == z the result is ";
echo var_dump($x == $z)."<br>";

echo "For x > y the result is ";
echo var_dump($x > $y)."<br>";

echo "For x < y the result is ";
echo var_dump($x < $y)."<br>";

// <> this sine for not equal to
echo "For x <> z the result is ";
echo var_dump($x <> $z)."<br>";


// Logical Operators
// Operator Name
// &&      Logical AND
// ||      Logical OR
// !       Logical NOT
// and     Logical AND
// Or      Logical OR
// XOr     Exclusive OR


$m = true;
$n = false;
echo "For m and n, the result is ";
echo var_dump($m and $n)."<br>";
echo "For m && n, the result is ";
echo var_dump($m && $n)."<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n)."<br>";
echo "For m || n, the result is ";
echo var_dump($m || $n)."<br>";

echo "For !m, the result is ";
echo var_dump(!$m)."<br>";
echo "For !n, the result is ";
echo var_dump(!$n)."<br>";

echo var_dump(true xor true);
echo var_dump(false xor false);
echo var_dump(true xor false);
echo var_dump(false xor true);
?>