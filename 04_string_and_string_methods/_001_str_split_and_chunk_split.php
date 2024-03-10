<?php

    $name = "hello";

    echo "<pre>";
    print_r(str_split($name));
    echo "</pre>";

    echo "<pre>";
    print_r(str_split($name, 2));
    echo "</pre>";


    $name2 = "Souvik Maity";

    echo "<pre>";
    print_r(chunk_split($name2, 2, "=>"));
    echo "</pre>";

?>