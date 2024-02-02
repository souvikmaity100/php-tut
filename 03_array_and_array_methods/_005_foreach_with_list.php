<?php


$emp = [
    [1, "Krishana", "Manager", 50000],
    [2, "Salman", "Salesman", 20000],
    [3, "Mohan", "Computer Operator", 12000],
    [4, "Amir", "Driver", 5000]
];

echo "<table border='1px' cellpadding='7px' cellspacing='0'>
                <tr>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Salary</th>
                </tr>";
foreach ($emp as list($sno, $name, $deg, $sal)) {
    echo "<tr>
                <td>$sno</td>
                <td>$name</td>
                <td>$deg</td>
                <td>$sal</td>
            </tr>";
}
echo "</table>";
?>



<?php

$marks = [
    " Krishana" => [
        "physics" => 85,
        "maths" => 78,
        "chemistry" => 89
    ],
    "Salman" => [
        "physics" => 68,
        "maths" => 73,
        "chemistry" => 79
    ],
    "Mohan" => [
        "physics" => 62,
        "maths" => 67,
        "chemistry" => 92
    ]
];

echo "<table border='1px' cellpadding='7px' cellspacing='0'>
        <tr>
            <th>Name</th>
            <th>physics</th>
            <th>math</th>
            <th>chemistry</th>
        </tr>";
foreach ($marks as $key => list("physics" => $phy,"maths" => $math,"chemistry" => $che)) {
    echo "<tr>
        <th>$key</th>
        <td>$phy</td>
        <td>$math</td>
        <td>$che</td>
    </tr>";
}
echo "</table>";
?>