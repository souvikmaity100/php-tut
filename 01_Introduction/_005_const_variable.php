<!-- PHP Constant Variables -->

<?php
    
    // define(name, value, case-insensitive)
    define("num", 500);
    // define("num", 500);

    echo num;
    
    define("_num", 500, true);
    // Can't use $ sign with constant variable name.
    // Constant Variables are Global Variables.
?>