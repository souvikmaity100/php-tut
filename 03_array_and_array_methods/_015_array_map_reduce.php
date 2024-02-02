<?php
    function square($n){
        return $n * $n;
        }
        $a = [1, 2, 3, 4, 5];
        $newArray = array_map('square', $a);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";

    function sq($n, $m){
        return "$m ($n)";
        }
        $num = [1, 2, 3, 4, 5];
        $color = array("red", "green", "blue", "yellow", "brown");
        // $newArray = array_map('sq', $num, $color);
        $newArray = array_map(null, $num, $color);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";


        function abcd($n){
            return strtoupper($n);
            }
            $ar =array("one" => "Apple", "two" => "Banana" , "three" => "Orange");
            $newArray = array_map('abcd', $ar);
            echo "<pre>";
            print_r($newArray);
            echo "</pre>";
?>

<?php
    // array_reduce(array, function, inital_value(opt))

    function myFunction ($n , $m){
        return $n."-".$m;
        }
        $a = ['orange', 'banana', 'apple'];
        $newArray = array_reduce($a, 'myFunction', 'Lemon');
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";


    function sma($n , $m){
        return $n+$m;
        }
        $b = [1,2,3,4,5,6];
        $newArray = array_reduce($b, 'sma', 1);
        echo "<pre>";
        print_r($newArray);
        echo "</pre>";
?>