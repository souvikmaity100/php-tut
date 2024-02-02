<?php
for ($a = 1; $a <= 10; $a++) {
    if ($a == 3) {
        echo "No. :" . $a . "<br>";
        continue;
    }
    echo "Number : " . $a . "<br>";
}

?>

<?php
for ($a = 1; $a <= 10; $a++) {
    if ($a == 3) {
        echo "No. :" . $a . "<br>";
        break;
    }
    echo "Number : " . $a . "<br>";
}

?>

<?php
    echo "hello world<br>";
    echo "hello world<br>";
    goto asm;
    echo "hello world<br>";
    echo "hello world<br>";
    echo "hello world<br>";
    echo "hello world<br>";
    asm:
    echo "hii";
?>
