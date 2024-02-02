<?php
    echo "While loops in php <br>";
    
    $i = 0;
    while ($i <= 10) {
        echo $i."<br>";
        $i++;
    }

    $i = 1;
    echo "<ul>";
    while ($i <= 10) {
        echo "<li> This is item- ".$i."</li>";
        $i++;
    }
    echo "</ul>";
    
    echo "<br>";
    echo "Do While loops in php <br>";
    $j = 25;
    do{
        echo "$j"."<br>";
        $j += 5;
    }while($j<20);
    
    
    echo "<br>";
    echo "For loops in php <br>";
    for ($k=10; $k < 20; $k++) { 
        echo "$k"."<br>";
    }
?>


<!-- nested loop -->
<?php
for ($a = 1;$a <= 100; $a = $a + 10){
    for ($b = $a;$b < $a + 10; $b++){
    echo $b." ";
    }
    echo "<br>";
}

?>