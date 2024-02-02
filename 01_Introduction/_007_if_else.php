<?php
$a = 45;
$b = 7;

if ($a > 78) {
    echo "a is greater than 78";
}
else{
    echo "a is not greater than 78";
}

echo "<br>";

$age = 27;
// if($age>18){
//     echo "You are allow to drink alchole";
// }
// elseif($age>13){
//     echo "You are allow to drink tea";
// }
// else{
//     echo "You can drink water only";
// }

if($age>25){
    if($age<65){
        echo "You can drive trucks";
    }
    else{
        echo "You can not drive trucks";
    }
}
elseif($age>=18){
    echo "You can drive motor bike";
}
elseif($age>=10){
    echo "You can drive cycle";
}
else{
    echo "You can not drive truck, motor bike and cycle";
}

if($age<65 && $age>25){
    echo "You can drive trucks";
}
else{
    echo "You can not drive truck, motor bike and cycle";
}
?>


<?php
    // different way
    $per = 120;

    if($per >= 80 && $per <=100):
        echo "Your are in Merit.";
    elseif($per >= 60 && $per < 80):
        echo "Your are in 1st Division.";
    elseif($per >= 45 && $per < 60):
        echo "Your are in 2nd Division.";
    elseif($per >= 33 && $per < 45):
        echo "Your are in 3rd Division.";
    elseif($per < 33):
        echo "Your are Fail.";
    else:
        echo "please Enter Valid Percentage";
    endif;
?>