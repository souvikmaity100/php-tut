<!-- PHP Code Syntax in HTML Tags : -->
<html>

<head>
    <title>Hello</title>

    <head>

    <body>
        <?php
        // php code
        ?>
    </body>

</html>

<!-- PHP Echo Statement : -->
<!-- Print Message or Variable value -->
<?php
    echo "Hello World";
    echo "Hello", "World";
    echo "Hello". "World";
?>


<!-- PHP Print Statement : -->
<!-- Print Message or Variable value -->
<?php
    print "Hello World";
    print "Hello". "World";
    print "<b>Hello World</b>";
    print 502.25;
?>

<!-- Difference between Echo & Print : -->
<!-- Echo is faster than print -->
<?php
    echo "Hello", "World";
    // print "Hello","World"; #not work
?>