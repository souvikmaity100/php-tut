<?php
    /*  • array_keys()
        • array_key_first() PHP version 7.3.0
        • array_key_last() PHP version 7.3.0
        • array_key_exists()
        • key_exists()    */


    // $color = ["red", "green", "blue", "yellow", "brown"];
    $color = ['1st'=>"red", '2nd'=>"green", 'third'=>"blue", 'fourth'=>"yellow", '5th'=>"brown"];

    // $narr = array_keys($color);
    // $narr = array_key_first($color);
    // $narr = array_key_last($color);
    // $naarr = array_key_exists('mango',$color);
    // $naarr = array_key_exists('third',$color);
    $naarr = key_exists('third',$color);

    // print_r($narr);
    var_dump($naarr);

    if ($naarr) {
        echo "key exist";
    }
    else{
        echo "key not exist";
    }
?>