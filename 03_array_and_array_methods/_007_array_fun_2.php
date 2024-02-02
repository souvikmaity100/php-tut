<?php
    // PHP Array Replace Functions:
    
    // array_replace() : use on index or associative array and array_replace_recursive() : use on multi dim associative array

    $a = ["Sanjay", "Aman","Rehman","Karan"];
    $b = ['g'=>"Gagan", 's' => "Salman"];
    $c = ["red", "green","g" => "blue"];

    // $nwear = array_replace($a, $b);
    $nwear = array_replace($a, $b, $c);
    print_r($nwear);

    echo "<br>";

    $array1 = array("a"=>array ("red"), "b"=>array ("green", "pink"));
    $array2 = array("a"=>array ("yellow"), "b"=>array ("black"));

    $nweArr = array_replace_recursive($array1, $array2);
    print_r($nweArr);

    echo "<br><br><br>";

?>



<?php
    
    // array_pop() and array_push()

    $food = array('orange', 'banana', 'apple', 'grapes', 'apple');

    array_pop($food);

    print_r($food);

    echo "<br>";
    
    array_push($food, "mango", "lamon");
    print_r($food);

    echo "<br><br><br>";
?>

<?php
    
    // array_shift() and array_unshift()
    $food2 = array('orange', 'banana', 'apple', 'grapes', 'apple');

    array_shift($food2);

    print_r($food2);

    echo "<br>";
    
    array_unshift($food2, "mango", "lamon");
    print_r($food2);

    echo "<br><br><br>";

?>

<?php
    
    // array_merge() : use on index or associative array and array_merge_recursive() : use on multi dim associative array and array_combine() : use on index array

    $arr1 = array("a","b","c");
    $arr2 = array("d","e", "g"=>"good");
    $arr3 = array("f"=>"flower","g"=>"mango");

    // $narr1 = array_merge($arr1, $arr2, $arr3);
    $narr1 = array_merge_recursive($arr1, $arr2, $arr3);
    // $narr1 = $arr2 + $arr3;
    print_r($narr1);
    echo "<br>";

    $nam = ["souvik", "suman", "pintu"];
    $age = [25, 28, 22];

    $narr2 = array_combine($nam, $age);
    print_r($narr2);

?>