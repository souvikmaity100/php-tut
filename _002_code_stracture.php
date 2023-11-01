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
    echo "Yahoo Baba";
    echo 'Yahoo Baba';
    echo "Yahoo", "Baba";
    echo "Yahoo". "Baba";
?>


<!-- PHP Print Statement : -->
<!-- Print Message or Variable value -->
<?php
    print "Yahoo Baba";
    print "Yahoo". "Baba";
    print "<b>Yahoo Baba</b>";
    print 502.25;
?>

<!-- Difference between Echo & Print : -->
<!-- Echo is faster than print -->
<?php
    echo "Yahoo", "Baba";
    print "Yahoo","Baba"; #not work
?>