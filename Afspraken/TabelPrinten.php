<html>
<head>
    <style>
        table, td, th {
            border: 1px solid black;
            color: black;
            width: 500px;
            float: top;
        }
    </style>
    <title>Afspraken tabel</title>
</head>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM afspraken";
$result = $conn->query($sql);
?>
<body>
<table>
    <tr>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Afspraak</th>
        <th>Tijd</th>
    </tr>
    <?php
    while ($row = $result->fetch()){
        echo "<tr>";
        echo "<td>" . $row['Voornaam'] . "</td>";
        echo "<td>" . $row['Achternaam'] . "</td>";
        echo "<td>" . $row['Afspraak'] . "</td>";
        echo "<td>" . $row['Tijd'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>