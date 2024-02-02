<?php
    function abcd(){
        echo "hello world";
    }

    $mango = "abcd";
    $mango();

?>

<?php
    function abcd2($nam){
        echo "hello world $nam";
    }

    $mango2 = "abcd2";
    $mango2("souvik");

?>

<!-- Anonymous Function
It is a function that does not have any name associated with it -->
<?php
    $hello = function($name){
        echo "hello world $name";
    };


    $hello("sam");
?>