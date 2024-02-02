<?php
    echo "Associative arrays in php<br>";


    $favCol = array('souvik' => 'Blue', 'shyama' => 'Yellow', 'pintu' => 'Red');

    foreach ($favCol as $key => $value) {
        echo "Fevorite color of $key is $value <br>";
    }


    $favCol['souvik'] = "gray";

    print_r($favCol);
    // echo "<br>";
    // echo $favCol['pintu'];
    // echo "<br>";
    // echo $favCol['shyama'];

?>