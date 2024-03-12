<?php
$string = 'Hello';

echo "The String: ".  $string . "<br>";

echo "md5: ". md5($string) ."<br>";

echo "md5 binary: ". md5($string, true) ."<br>";

echo "md5 hex: ". bin2hex(md5($string)) . "<br><br>";

echo "sha1 binary: ".  sha1($string, true) ."<br>";


if (md5($string) == '8b1a9953c4611296a827abf8c47804d7') {
    echo "password match";
}
?>