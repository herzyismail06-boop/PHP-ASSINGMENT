<?php


$countries = [
    "Somalia" => "Mogadishu",
    "Kenya" => "Nairobi",
    "Ethiopia" => "Addis Ababa",
    "Djibouti" => "Djibouti",
    "Uganda" => "Kampala"
];




function getCapital($country)
{
    global $countries;

    return $countries[$country];
}



echo "<h2>Countries and Capitals</h2>";

foreach ($countries as $country => $capital) {
    echo "Country: $country - Capital: " . getCapital($country) . "<br>";
}



$numbers = [10, 20, 30, 40, 50];

function calculateSum($numbers)
{
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

echo "<h2>Numbers</h2>";

echo "Numbers: ";

foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br>";
echo "Sum = " . calculateSum($numbers);



$students = [

    "Semester 1" => [

        [
            "course" => "Python",
            "CV1" => 10,
            "Midterm" => 20,
            "CV2" => 10,
            "Final" => 15
        ],

        [
            "course" => "JavaScript",
            "CV1" => 8,
            "Midterm" => 20,
            "CV2" => 10,
            "Final" => 40
        ],

        [
            "course" => "Oracle",
            "CV1" => 8,
            "Midterm" => 10,
            "CV2" => 10,
            "Final" => 70
        ]
    ],

    "Semester 2" => [

        [
            "course" => "PHP",
            "CV1" => 9,
            "Midterm" => 20,
            "CV2" => 10,
            "Final" => 40
        ],

        [
            "course" => "PHP and MySQL",
            "CV1" => 9,
            "Midterm" => 20,
            "CV2" => 10,
            "Final" => 10
        ]
    ]
];



function totalMarks($student)
{
    return $student["CV1"]
         + $student["Midterm"]
         + $student["CV2"]
         + $student["Final"];
}

function status($total)
{
    if ($total < 50) {
        return "Fail";
    } else {
        return "Pass";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

<title>PHP Assignment</title>

<style>

body {
    font-family: Arial;
    background-color: #f5f5f5;
    padding: 20px;
}

h1, h2 {
    color: #333;
}

table {
    border-collapse: collapse;
    width: 90%;
    margin-top: 20px;
}

th {
    background-color: #333;
    color: white;
    padding: 10px;
}

td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

/* Different colors */

.red {
    background-color: #ff4d4d;
    color: white;
}

.yellow {
    background-color: #ffff00;
    color: black;
}

.green {
    background-color: #66cc66;
    color: black;
}

</style>

</head>

<body>

<h1>PHP Assignment</h1>


<h2>Student Transcript</h2>

<table>

<tr>
    <th>Semester</th>
    <th>Course</th>
    <th>CV1</th>
    <th>Midterm</th>
    <th>CV2</th>
    <th>Final</th>
    <th>Total</th>
    <th>Status</th>
</tr>

<?php

foreach ($students as $semester => $courses) {

    foreach ($courses as $student) {

        $total = totalMarks($student);
        $result = status($total);

        
        if ($total < 50) {
            $color = "red";
        } elseif ($total <= 60) {
            $color = "yellow";
        } else {
            $color = "green";
        }

        echo "<tr class='$color'>";

        echo "<td>$semester</td>";
        echo "<td>" . $student["course"] . "</td>";
        echo "<td>" . $student["CV1"] . "</td>";
        echo "<td>" . $student["Midterm"] . "</td>";
        echo "<td>" . $student["CV2"] . "</td>";
        echo "<td>" . $student["Final"] . "</td>";
        echo "<td>$total</td>";
        echo "<td>$result</td>";

        echo "</tr>";
    }
}

?>

</table>

</body>
</html>