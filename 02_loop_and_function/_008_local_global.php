<?php
    echo "<h1>Local, Global and Scope in php</h1> <br>";

    $a = 45;
    // $b = 20;

    function printVal(){
        // $a = 98;
        // $b = 23;

        global $a, $b;
        $a = 100;
        $b = 200;
        echo "<br>The value of a is $a and b is $b <br>";
    }
    // printVal();
    
    // echo $a."<br>".$b;
    echo var_dump($GLOBALS);
    // echo var_dump($GLOBALS['a']);
    // echo "<br>The value of a is $a and b is  <br>";
    
    // echo var_dump($GLOBALS);
    echo ($GLOBALS['a']);
    // echo var_dump($GLOBALS['b']);
?>