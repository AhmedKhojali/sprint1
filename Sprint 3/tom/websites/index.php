<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vuurwerkshop</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>

<ul>
    <li><a class="active" href="index.php">HOME</a></li>
    <li><a href="assortiment.php">HELE ASSORTIMENT</a></li>
    <li><a href="knalvuurwerk.php">KNALVUURWERK</a></li>
    <li><a href="siervuurwerk.php">SIERVUURWERK</a></li>
    <li><a href="#about">WINKELWAGEN</a></li>
</ul>
<div class="container">
    <div class="aanbieding">
        <h1>AANBIEDINGEN VAN DE MAAND</h1>
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

    $sql = "SELECT * FROM product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class=content2>";
        echo "<a href=" . $row['website'] . ">";
        echo "<img src=../images/".$row['url_img'] . " >";
        echo "<p>" . $row['naam'] . "</p>";
        echo "<hr>";
        echo "€" .  $row['prijs'] . "<br>";
        echo $row['aantal'] . " stuks<br>";
        echo "</div>";
        }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>

</div>
</body>
</html>