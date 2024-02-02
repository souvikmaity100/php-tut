<?php
// ------------slice------------
    // array_slice(array, start_index, length, preserved_index)

    echo "slice<br>";
    $color= ["red", "green", "blue", "yellow", "brown"];
    
    
    // $narr = array_slice($color, 1, 2);
    $narr = array_slice($color, -3, 2);
    // $narr = array_slice($color, -3, 2, true);
    print_r($narr);

    echo "<br><br>";
?>

<?php
    $color2= ['a'=>"red",'c'=> "green",5=> "blue",'j'=> "yellow",'d'=> "brown"];
    
    // $narr = array_slice($color2, 1, 2);
    $narr2 = array_slice($color2, -3, 3);
    // $narr = array_slice($color2, -3, 2, true);
    print_r($narr2);

    echo "<br><br>";
    
?>


<?php
    // -----------splice-----------
    // array_splice(array, start_index, length, array_2)

    echo "splice<br>";
    $color3 = ["red", "green", "blue", "yellow", "brown"];
    $fruit3 = ["Orange", "Apple"];

    // $narr3 = array_splice($color3, 1, 2);
    $narr3 = array_splice($color3, 1, -1);
    // $narr3 = array_splice($color3, 1, 2, $fruit3);

    print_r($narr3);
    echo "<br><br>";
    print_r($color3);

    echo "<br><br>";

?>

<?php

    $color4 = ['a'=>"red", 'b'=>"green", 'c'=>"blue", 'd'=>"yellow", 'e'=>"brown"];
    $fruit4 = ['a'=>"Orange", 'b'=>"Apple"];

    // $narr4 = array_splice($color4, 1, 2);
    $narr4 = array_splice($color4, 1, 2, $fruit4);

    print_r($narr4);
    echo "<br><br>";
    print_r($color4);

    echo "<br><br>";

?>