<?php

$msg = "i love php, php is a very good language for backend development";

// first preference and case secsitive
echo strpos($msg, 'php') . "<br><br>";

// last preference and case secsitive
echo strrpos($msg, 'php') . "<br><br>";

// last preference and case secsitive
echo strrpos($msg, 'php', 10) . "<br><br>";

// first preference and case in-secsitive
echo stripos($msg, 'PHP') . "<br><br>";

// last preference and case in-secsitive
echo strripos($msg, 'pHP') . "<br><br>";

?>