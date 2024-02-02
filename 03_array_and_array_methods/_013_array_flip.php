<?php
    $a = array(
        "Bill" =>10,
        "Joe" => 20,
        "Peter" => 30
    );
        $newArray = array_flip($a);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        $newArray = array_change_key_case($a, CASE_LOWER);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
        $newArray = array_change_key_case($a, CASE_UPPER);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
?>

<?php
    // array sum and product
    $a = [10, 20, 30, 40, 50];
    $b = ['a'=>1.5, 'b'=>2.50, 'c'=>2.30, 'd'=>40, 'e'=>50];

    // $narr = array_sum($a);
    $narr = array_sum($b);
    echo "sum is : ".$narr."<br>";

    // $narr = array_sum($a);
    $narr = array_product($b);
    echo "Product is : ".$narr."<br>";
?>

<?php
    
    // Array rand and shuffle

    // $color = array("red", "green", "blue", "yellow", "brown");
    $color = array('a'=>"red", 'b'=>"green", 'c'=>"blue", 'd'=>"yellow", 'e'=>"brown");
    $newArray = array_rand ($color);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
    echo $color[$newArray]."<br>";

    $color2 = array('a'=>"red", 'b'=>"green", 'c'=>"blue", 'd'=>"yellow", 'e'=>"brown");
    $newArray2 = array_rand($color2,2);
    echo "<pre>";
    print_r($newArray2);
    echo "</pre>";
    echo $color2[$newArray2[0]]."<br>";
    echo $color2[$newArray2[1]]."<br>";


    $color3 = array('a'=>"red", 'b'=>"green", 'c'=>"blue", 'd'=>"yellow", 'e'=>"brown");

    shuffle($color3);

    print_r($color3);
?>