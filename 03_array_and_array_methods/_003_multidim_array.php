<?php

    echo "Multi dimensional arrays in php <br>";

    // 2 dimensional arrays
    $multiDim = array(
        array(7,8,9,5,6),
        array(4,5,6),
        array(1,2)
    );
    // echo var_dump($multiDim);
    // echo $multiDim[0][0];

    for ($i=0; $i < count($multiDim); $i++) { 
        echo var_dump($multiDim[$i]);
        echo "<br>";
    }

    for ($i=0; $i < count($multiDim); $i++) { 
        for ($j=0; $j < count($multiDim[$i]); $j++) { 
            echo $multiDim[$i][$j]." ";
        }
        echo "<br>";
    }
    
    
    // 3 dimensional arrays
    $multiDim3 = array(
        array(array('a', 'b', 'c', 'd'), array('x', 'y', 'z'), array('m', 'n', 'o', 'p')),
        array(array('a1', 'a2', 'a3'), array('b1', 'b2', 'b3', 'b4')),
        array(array(1, 2, 3, 4, 5))
    );
    
    for ($i=0; $i < count($multiDim3); $i++) { 
        for ($j=0; $j < count($multiDim3[$i]); $j++) { 
            for ($k=0; $k < count($multiDim3[$i][$j]); $k++) { 
                echo $multiDim3[$i][$j][$k]." ";
            }
            echo "<br>";
        }
        echo "<br>";
    }
?>