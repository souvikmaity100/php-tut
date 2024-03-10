<?php

    $msg = "Hello Sam, Welcome";

    echo strlen($msg)."<br><br>";

    echo str_word_count($msg)."<br><br>";

    echo str_word_count($msg, 0)."<br><br>";

    echo "<pre>";
    print_r(str_word_count($msg, 1));
    echo "</pre>";
    
    echo "<pre>";
    print_r(str_word_count($msg, 2));
    echo "</pre>";

    echo substr_count($msg, "Sam")."<br><br>";



?>