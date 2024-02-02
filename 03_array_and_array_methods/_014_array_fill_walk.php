<?php
    // array_fill(index , number, value) and array_fill_keys(array, value)

    $a = array('a','b','c');

    $nar = array_fill_keys($a, 'mango');
    print_r($nar);

    echo "<br><br>";
    
    $narr = array_fill(2, 4, 'good');
    print_r($narr);
    echo "<br><br>";
?>

<?php
    
    // array_walk(array, function, paramiter(optional)) and array_walk_recursive(array, function, paramiter(optional))

    $fruits = array(
        "a" => "Lemon",
        "b" =>"Orange",
        "c" =>"Banana",
        "d" => "Apple"
    );
    array_walk($fruits, "myFunction","hello");
    function myFunction ($value, $key, $asm){
    echo "$key : $value, $asm <br>";
    }    

    $col = array('r' => 'red', 'b'=>'blue');
    $fruits2 = array(
        $col,
        "a" => "Lemon",
        "b" =>"Orange",
        "c" =>"Banana",
        "d" => "Apple"
    );
    array_walk_recursive($fruits2, "myFunction2","hello");
    function myFunction2($value, $key, $asm){
    echo "$key : $value, $asm <br>";
    }    
?>