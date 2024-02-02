<?php
    
    // array diff(difference) function

    /*
        • array_diff()
        • array_diff_key()
        • array_diff_assoc()
        • array_diff_uassoc()
        • array_diff_ukey()
        • array_udiff_assoc()
        • array_udiff_uassoc()
        • array_udiff()
     */


    $a = ["a" => "Sanjay", "b" => "Aman", "c" => "Mohan"];
    $b = ["a" => "Sanjay", "d" => "Mohan"];

    $n1 = array_diff($a, $b);
    print_r($n1);

    echo "<br><br>";

    $n1 = array_diff_key($a, $b);
    print_r($n1);

    echo "<br><br>";
    $n1 = array_diff_assoc($a, $b);
    print_r($n1);

    echo "<br><br>";

    function comfun($a, $b) {
        if($a === $b){
            return 0;
            }
            return ($a > $b)? 1 : -1;
    }

    $al = array("a"=>"red", "b"=>"green", "c"=> "blue", "d"=> "yellow");
    $a2 = array("a"=>"red", "f"=>"green", "d"=> "purple");
    $a3 = array ("a"=>"red", "b"=>"black", "h"=>"yellow");
    // $newArray = array_diff($al, $a2, $a3);
    // $newArray = array_diff_key($al, $a2);
    // $newArray = array_diff_assoc($al, $a2);
    // $newArray = array_diff_uassoc($al, $a2, "comfun");
    // $newArray = array_udiff_assoc($al, $a2, "comfun");
    // $newArray = array_diff_ukey($al, $a2, "comfun");
    $newArray = array_udiff($al, $a2, "comfun");

    print_r($newArray);
    echo "<br><br>";


?>