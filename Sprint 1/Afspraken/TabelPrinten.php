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
<body>
<?php
    include 'FunctieInsertTable.php'
?>
<form method="post" action="">
    <label>Voornaam</label>
    <input type="text" name="voornaam"><br>

    <label>Achternaam</label>
    <input type="text" name="achternaam"><br>

    <label>Afspraak</label>
    <input type="text" name="afspraak"><br>

    <label>Tijd</label>
    <input type="text" name="tijd"><br>

    <input type="submit" name="verzenden" value="opslaan">
</form>
<br>
<br>

<?php

include 'DatabaseInlog.php';

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