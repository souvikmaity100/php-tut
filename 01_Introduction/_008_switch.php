<!-- switch (expression) {
case condition 1: statements;
break;
case condition 2: statements;
break;
case condition 3: statements;
break;
default: statement;
} -->

<!-- another Way -->
<!-- switch (expression) :
case condition 1: statements;
break;
case condition 2: statements;
break;
case condition 3: statements;
break;
default: statement;
endswitch; -->

<?php
$age = 25;
switch ($age) {
    case 5:
        echo "you are 5 years old";
        break;

    case 10:
        echo "you are 10 years old";
        break;

    case 25:
        echo "you are 25 years old";
        break;

    case 45:
        echo "you are 45 years old";
        break;

    default:
        echo "your age is weird";
        break;
}

?>


<?php
$age = 25;
switch ($age) {
    case 5: case 10: case 25:
        echo "you are 5 or 10 or 25 years old";
        break;

    case 45:
        echo "you are 45 years old";
        break;

    default:
        echo "your age is weird";
        break;
}

?>

<?php
$age = 25;
switch (true) {
    case ($age>5 or $age < 25):
        echo "you are between 5 and 25 years old";
        break;

    default:
        echo "your age is weird";
        break;
}

?>



<?php
$age = 25;
switch ($age):
    case 5:
        echo "you are 5 years old";
        break;

    case 10:
        echo "you are 10 years old";
        break;

    case 25:
        echo "you are 25 years old";
        break;

    case 45:
        echo "you are 45 years old";
        break;

    default:
        echo "your age is weird";
        break;
endswitch;

?>