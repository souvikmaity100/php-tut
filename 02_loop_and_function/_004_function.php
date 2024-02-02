<?php
    echo "Function in php <br>";

    function abcd() {
        echo "hello world<br>";
        echo "hii how are you?<br>";
    }

    function add($a, $b = 0){
        echo $a+$b;
    }

    function sumMarks($marksArr){
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
        return $sum;
    }

    function avgMarks($marksArr){
        $sum = 0;
        $i = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
    }

    $pintu = array(53, 45, 78, 92, 63, 98);
    $totalMarksPintu = sumMarks($pintu);
    $totalAvgMarksPintu = avgMarks($pintu);

    $shyama = [73, 65, 58, 42, 63];
    $totalMarksShyama = sumMarks($shyama);

    echo "Total marks scored by Pintu out of 600 is $totalMarksPintu, Average is $totalAvgMarksPintu% <br>";

    echo "Total marks scored by Shyama out of 600 is $totalMarksShyama <br>";


    function sum($a, $b, $c=0){
        $sum = $a +$b+$c;
        return $sum;
    }


    $v1 = sum(5,8,5);
    echo $v1;
?>