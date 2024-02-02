<?php
    $marks = [
        " Suman" => [
                "physics" => 85,
                "maths" => 78,
                "chemistry" => 89
            ],
        "Soham" => [
            "physics" => 68,
            "maths" => 73,
            "chemistry" => 79
            ],
        "Monoj" => [
            "physics" => 62,
            "maths" => 67,
            "chemistry" => 92
            ]
        ];

        echo "<table border='1px' cellpadding='7px' cellspacing='0'>
                <tr>
                    <th>Name</th>
                    <th>Physics</th>
                    <th>Math</th>
                    <th>Chemistry</th>
                </tr>";
        foreach ($marks as $key1 => $val1) {
            echo "<tr>
                    <th>$key1</th>";
            foreach ($val1 as $key2 => $val2) {
                echo "<td>$val2</td>";
            }
            echo "<tr>";
        }
        echo "</table>";

?>
