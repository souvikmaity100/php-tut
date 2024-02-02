<?php
    
    $fruits = array("apple", "banana", "cherry");

    // Or using shorthand syntax (PHP 5.4+)
    $fruits = ["apple", "banana", "cherry"];
    
    echo $fruits[0]; // Output: apple
    
    // Modifying elements in an indexed array
    $fruits[1] = "orange";
    
    // Adding elements to an indexed array:
    $fruits[4] = "grape";

    echo "<pre>";
    print_r($fruits); # specily for array
    echo "</pre>";

    $color[0] = "red";
    $color[1] = "green";
    $color[2] = "blue";
?>