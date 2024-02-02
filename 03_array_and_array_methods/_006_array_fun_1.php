<?php
// count() and sizeof()
$food = array('orange', 'banana', 'apple', 'grapes', 'apple');
echo count($food);
$len = sizeof($food);

$food2 = array(
    'fruits' => array('onange', 'banana', 'apple'),
    'veggie' => array('carrot','collard', 'pea')
);

echo sizeof($food2);
echo count($food2, 1);

for ($i=0; $i < $len; $i++) { 
    echo $food[$i]."<br>";
}

print_r(array_count_values($food));

echo "<br><br><br>";
?>

<?php
// in_array() : returns=> 1/0 and array_search(): returns=> index/key
$food = array('orange', 'banana', 'apple', '15', 'grapes', 'apple');
echo in_array('apple',$food);
echo "<br>";
// if (in_array('mango',$food)) {
//     echo "find";
// }
// else{
//     echo "can't find";
// }

// third argument denots strict mode. default: false
if (in_array(15,$food, true)) {
    echo "find";
}
else{
    echo "can't find";
}


echo "<br>";
$food2 = array('orange', 'banana', 'apple', 'grapes', 'apple');
echo array_search('apple',$food2);
echo "<br>";

$food3 = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'grapes', 'e' => 'apple');
echo array_search('apple',$food3);
echo "<br>";




?>