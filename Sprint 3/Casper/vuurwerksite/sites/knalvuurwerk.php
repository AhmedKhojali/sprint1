<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vuurwerkshop</title>
    <link rel="stylesheet" type="text/css" href="../styles/allstyle.css">
</head>
<body>

<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="assortiment.php">HELE ASSORTIMENT</a></li>
    <li><a class="active" href="knalvuurwerk.php">KNALVUURWERK</a></li>
    <li><a href="siervuurwerk.php">SIERVUURWERK</a></li>
    <li><a href="#about">WINKELWAGEN</a></li>
</ul>
<div class="container">
    <div class="aanbieding">
        <h1>KNALVUURWERK</h1>
    </div>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM product WHERE Categorie='knalvuurwerk'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<div class=content2>";
        echo "<a href=" . $row['weblink'] . ">";
    echo "<img src=".$row['url_Afbeelding'] . ">";
    echo "<p>" . $row['naam'] . "</p>";
    echo "<hr>";
    echo "€" .  $row['Prijs'] . "<br>";
    echo $row['voorraad'] . " stuks<br>";
    echo "</div>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>

</body>
</html>