<?php
    // extract(array, extract_ruls, prefix);
    /*
    extract_ruls:
    • EXTR_OVERWRITE (default)
    • EXTR_SKIP : 
    • EXTR_PREFIX_SAME
    • EXTR_PREFIX_ALL
    */
    $a = 'mango';
    $color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');
    // extract($color);
    // extract($color, EXTR_SKIP);
    // extract($color, EXTR_PREFIX_SAME, "abcd");
    extract($color, EXTR_PREFIX_ALL, "abcd");
    echo "value of a is $a <br>";
    echo "value of a is $abcd_a <br>";
    // echo "value of b is $b <br>";
    echo "value of b is $abcd_b <br>";


    $name = 'souvik';
    $role = 'web dev';
    $sub = 'math';

    $asd = compact('name','role','sub');
    print_r($asd);
    echo "<br>";

    $name2 = 'souvik';
    $role2 = 'web dev';
    $sub2 = 'math';

    $add = 'subharara';
    $gen = 'male';

    $ext = ['add', 'gen'];

    $asd2 = compact('name2','role2','sub2', $ext);
    print_r($asd2);
    echo "<br>";
    
    
    
?>

<?php
    // range(start, end, step)
    
    $narr = range(3, 10);
    print_r($narr);
    echo "<br>";

    $narr2 = range(5, 25, 3);
    print_r($narr2);
    echo "<br>";
?>