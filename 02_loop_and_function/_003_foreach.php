<?php
    $arr = array("Souvik", "Suman", "Subrata", "Pintu", "Shyama");

    // echo var_dump($arr);

    // Using for loop 
    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i]." is a good boy."."<br>";
    }

    // Easy way to do this
    foreach ($arr as $value) {
        echo $value ."<br>";
    }

    $arr2 = array("name" => "Souvik Maity",
            "role" => "Web Developer",
            "salary" => 100000);
    foreach ($arr2 as $key => $value) {
        echo "The $key of the employee is $value <br>";
    }
?>