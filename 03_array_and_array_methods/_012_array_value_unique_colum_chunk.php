<?php
    // Array values and unique
    $color = array("a"=>"red", "b"=>"green", "c"=>"red", "d"=> "yellow");
    // $newArray = array_values($color);
    $newArray = array_unique($color);
    echo "<pre>";
    print_r ($newArray);
    echo "</pre>";

?>

<?php
    // Array column and chunk

    $asm = array(
        array(
        'id' => 2201,
        'first_name' => 'Anil',
        'last_name' => 'Kapoor',
        ),
        array(
        'id' => 2202,
        'first_name' => 'Salman',
        'last_name' => 'Khan',
        ),
        array(
        'id' => 2203,
        'first_name' => 'John',
        'last_name' => 'Abraham',
        )
    );

    // $narr = array_column($asm, 'first_name');
    $narr = array_column($asm, 'first_name', 'id');
    print_r($narr);


    $cars = ["Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Opel"];
    $newArray = array_chunk($cars, 2);
    echo "<pre>";
    print_r($newArray) ;
    echo "</pre>";

    $age = array(
        "Mohan" => "35",
        "Aman" => "37",
        "Ram" => "43",
        "Salman" => "25");

    $newArray = array_chunk($age, 2, true);
    echo "<pre>";
    print_r($newArray) ;
    echo "</pre>";
?>