<!DOCTYPE html>
<html>
<head>
    <title>PHP & MySQL Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px 15px;
            text-align: center;
        }

        th {
            background-color: #ddd;
        }

        h2 {
            margin-top: 30px;
        }
    </style>
</head>

<body>

<?php

/* =========================================================
   QUESTION 1
   One-dimensional array
   ========================================================= */

echo "<h2>Question 1</h2>";

$array = array(
    5, -7, 12, 10, -7, 11,
    -6, 12, 1, -7, 2, 9
);


/* 1 & 2. Print all elements */
echo "<h3>All Elements:</h3>";

foreach ($array as $value) {
    echo $value . " ";
}


/* 3. Total of all elements */
$total = 0;

foreach ($array as $value) {
    $total += $value;
}

echo "<p><b>Total of all elements:</b> $total</p>";


/* 4. Total of even elements */
$evenTotal = 0;

foreach ($array as $value) {
    if ($value % 2 == 0) {
        $evenTotal += $value;
    }
}

echo "<p><b>Total of even elements:</b> $evenTotal</p>";


/* 5. Total of odd elements */
$oddTotal = 0;

foreach ($array as $value) {
    if ($value % 2 != 0) {
        $oddTotal += $value;
    }
}

echo "<p><b>Total of odd elements:</b> $oddTotal</p>";


/* 6. Minimum element and its positions */
$min = min($array);

echo "<p><b>Minimum element:</b> $min</p>";
echo "Positions of minimum element: ";

foreach ($array as $index => $value) {
    if ($value == $min) {
        echo $index . " ";
    }
}


/* 7. Maximum element and its positions */
$max = max($array);

echo "<p><b>Maximum element:</b> $max</p>";
echo "Positions of maximum element: ";

foreach ($array as $index => $value) {
    if ($value == $max) {
        echo $index . " ";
    }
}


/* =========================================================
   QUESTION 2
   Associative two-dimensional array
   ========================================================= */

echo "<h2>Question 2</h2>";

$colors = array(
    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);


echo "<table>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $rowName => $row) {

    echo "<tr>";
    echo "<th>$rowName</th>";

    foreach ($row as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";


/* =========================================================
   QUESTION 3
   Square two-dimensional array
   ========================================================= */

echo "<h2>Question 3</h2>";

$array2D = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);


/* 2. Print all elements */
echo "<h3>Array Elements:</h3>";

echo "<table>";

foreach ($array2D as $row) {

    echo "<tr>";

    foreach ($row as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";


/* 3. Total odd elements */
$oddTotal = 0;

foreach ($array2D as $row) {

    foreach ($row as $value) {

        if ($value % 2 != 0) {
            $oddTotal += $value;
        }
    }
}

echo "<p><b>Total of odd elements:</b> $oddTotal</p>";


/* 4. Total even elements */
$evenTotal = 0;

foreach ($array2D as $row) {

    foreach ($row as $value) {

        if ($value % 2 == 0) {
            $evenTotal += $value;
        }
    }
}

echo "<p><b>Total of even elements:</b> $evenTotal</p>";


/* 5. Total of each row */

echo "<h3>Total of Each Row:</h3>";

foreach ($array2D as $i => $row) {

    $rowTotal = 0;

    foreach ($row as $value) {
        $rowTotal += $value;
    }

    echo "Row " . ($i + 1) . " = $rowTotal<br>";
}


/* 6. Total of each column */

echo "<h3>Total of Each Column:</h3>";

$columns = count($array2D[0]);

for ($j = 0; $j < $columns; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < count($array2D); $i++) {
        $columnTotal += $array2D[$i][$j];
    }

    echo "Column " . ($j + 1) . " = $columnTotal<br>";
}


/* 7. Total of each diagonal */

$mainDiagonal = 0;
$secondaryDiagonal = 0;

for ($i = 0; $i < count($array2D); $i++) {

    $mainDiagonal += $array2D[$i][$i];

    $secondaryDiagonal +=
        $array2D[$i][count($array2D) - 1 - $i];
}

echo "<h3>Diagonal Totals:</h3>";

echo "Main diagonal = $mainDiagonal<br>";
echo "Secondary diagonal = $secondaryDiagonal<br>";


/* 8. Total of all elements */

$allTotal = 0;

foreach ($array2D as $row) {

    foreach ($row as $value) {
        $allTotal += $value;
    }
}

echo "<p><b>Total of all elements:</b> $allTotal</p>";


/* 9. Minimum and positions */

$min = $array2D[0][0];
$minPositions = array();

for ($i = 0; $i < count($array2D); $i++) {

    for ($j = 0; $j < count($array2D[$i]); $j++) {

        if ($array2D[$i][$j] < $min) {
            $min = $array2D[$i][$j];
        }
    }
}


for ($i = 0; $i < count($array2D); $i++) {

    for ($j = 0; $j < count($array2D[$i]); $j++) {

        if ($array2D[$i][$j] == $min) {
            $minPositions[] = "[$i,$j]";
        }
    }
}

echo "<p><b>Minimum element:</b> $min</p>";
echo "Positions: " . implode(", ", $minPositions) . "<br>";


/* 10. Maximum and positions */

$max = $array2D[0][0];
$maxPositions = array();

for ($i = 0; $i < count($array2D); $i++) {

    for ($j = 0; $j < count($array2D[$i]); $j++) {

        if ($array2D[$i][$j] > $max) {
            $max = $array2D[$i][$j];
        }
    }
}


for ($i = 0; $i < count($array2D); $i++) {

    for ($j = 0; $j < count($array2D[$i]); $j++) {

        if ($array2D[$i][$j] == $max) {
            $maxPositions[] = "[$i,$j]";
        }
    }
}

echo "<p><b>Maximum element:</b> $max</p>";
echo "Positions: " . implode(", ", $maxPositions) . "<br>";


/* =========================================================
   QUESTION 4
   Associative two-dimensional student array
   ========================================================= */

echo "<h2>Question 4</h2>";

$students = array(

    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhigley"
    ),

    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ),

    "CA221" => array(
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmaacaanka, Dharkeynley"
    )
);


/*
Note:
The question says row names CA202, CA207 and CA202,
while the table itself displays CA221, CA223 and CA221.
The code above follows the table.
*/

echo "<table>";

echo "<tr>";
echo "<th></th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $studentID => $student) {

    echo "<tr>";

    echo "<th>$studentID</th>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";


/* =========================================================
   QUESTION 5
   Student transcript
   ========================================================= */

echo "<h2>Question 5</h2>";

$transcript = array(

    "Semester 1" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )
    ),

    "Semester 2" => array(

        "subject1" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ),

        "subject2" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ),

        "subject3" => array(
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        )
    )
);


echo "<table>";

echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";


foreach ($transcript as $semester => $courses) {

    foreach ($courses as $course => $data) {

        echo "<tr>";

        echo "<td>$semester</td>";
        echo "<td>$course</td>";
        echo "<td>" . $data["CW1"] . "</td>";
        echo "<td>" . $data["MidTerm"] . "</td>";
        echo "<td>" . $data["CW2"] . "</td>";
        echo "<td>" . $data["Final"] . "</td>";
        echo "<td>" . $data["Total"] . "</td>";
        echo "<td>" . $data["Status"] . "</td>";

        echo "</tr>";
    }
}

echo "</table>";

?>

</body>
</html>