<!--
• next
• prev
• end
• pos
• current
• key
• reset
 -->
<?php
$food = array('orange', 'banana', 'apple', 'grapes');

echo current($food);
echo "<br>";

next($food);
next($food);
echo current($food);
echo "<br>";

prev($food);
echo current($food);
echo "<br>";

$food2 = array("d" => "lemon",
"a" => "orange",
"b" => "banana",
"c" => "apple");

end($food2);
echo key($food2);
echo "<br>";

reset($food2);
echo current($food2);
echo "<br>";
    
?>

<?php
    
    // --------------list--------------
    // work only with index array or associative array with numaric key

    $people = array("Peter", "Joe", "Glenn", "Cleveland");
    // $people = array(45, 75, 2, 100, 152);
    list($a, $b, $c, $d) = $people;
    // list($a, , $c, $d) = $people;

    echo "value of a is $a <br>";
    echo "value of b is $b <br>";
    echo "value of c is $c <br>";
    echo "value of d is $d <br>";

    
?>