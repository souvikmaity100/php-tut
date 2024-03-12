<?php
$string = '<script>alert("Hello, World!");</script>';

$escaped_string = htmlentities($string);

echo $escaped_string;
// Output: &lt;script&gt;alert(&quot;Hello, World!&quot;);&lt;/script&gt;
?>

<?php
$escaped_string = '&lt;script&gt;alert(&quot;Hello, World!&quot;);&lt;/script&gt;';

$unescaped_string = html_entity_decode($escaped_string);

echo $unescaped_string;
// Output: <script>alert("Hello, World!");</script>
?>


<?php
$string2 = "Don't touch that!";

$escaped_string = htmlentities($string2, ENT_QUOTES);

echo $escaped_string;
// Output: Don&#039;t touch that!
?>

<?php
$string = '<script>alert("Hello, World!");</script>';

$escaped_string = htmlspecialchars($string);

echo $escaped_string;
// Output: &lt;script&gt;alert(&quot;Hello, World!&quot;);&lt;/script&gt;
?>

<?php
$escaped_string = '&lt;script&gt;alert(&quot;Hello, World!&quot;);&lt;/script&gt;';

$unescaped_string = htmlspecialchars_decode($escaped_string);

echo $unescaped_string;
// Output: <script>alert("Hello, World!");</script>
?>