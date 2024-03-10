<?php
// retuen string

$msg = "i love php, php is a very good language for backend development";

echo strstr($msg, 'php')."<br><br>";

echo strstr($msg, 'php', true)."<br><br>";

echo strchr($msg, 'p', true)."<br><br>";

echo strrchr($msg, 'p')."<br><br>";

echo stristr($msg, 'PHP')."<br><br>";

echo strpbrk($msg, "ol")."<br><br>";



?>