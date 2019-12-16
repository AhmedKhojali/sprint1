<html>
<head>
    <title>Hallo</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vuurwerk";


    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        if (isset ($_POST['verzenden'])) {
            $naam = filter_input(INPUT_POST, "naam", FILTER_SANITIZE_STRING);
            $prijs = filter_input(INPUT_POST, "prijs", FILTER_SANITIZE_STRING);
            $aantal = filter_input(INPUT_POST, "aantal", FILTER_SANITIZE_STRING);
            $website = filter_input(INPUT_POST, "website", FILTER_SANITIZE_STRING);
            $url_img = filter_input(INPUT_POST, "url_img", FILTER_SANITIZE_STRING);
            $categorie = filter_input(INPUT_POST, "categorie", FILTER_SANITIZE_STRING);
            $query = $db->prepare("INSERT INTO product(naam, prijs, aantal, website, url_img, categorie) VALUES(:naam, :prijs, :aantal, :website, :url_img, :categorie)");
            $query->bindParam("naam", $naam);
            $query->bindParam("prijs", $prijs);
            $query->bindParam("aantal", $aantal);
            $query->bindParam("website", $website);
            $query->bindParam("url_img", $url_img);
            $query->bindParam("categorie", $categorie);
            if ($query->execute()) {
                echo "De nieuwe gegevens zijn toegevoegd.";
            } else {
                echo "Er is een fout opgetreden!";
            }
            echo "<br>";
        }
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
?>

<form method="post" action="">
    <label>Naam</label>
    <input type="text" name="naam"><br>

    <label>Prijs</label>
    <input type="text" name="prijs"><br>

    <label>Aantal</label>
    <input type="text" name="aantal"><br>

    <label>Website</label>
    <input type="text" name="website"><br>

    <label>Url_img</label>
    <input type="text" name="url_img"><br>

    <label>Categorie</label><br>
        <input type="radio" name="categorie" id="categorie" value="knalvuurwerk"> siervuurwerk</br>
        <input type="radio" name="categorie" id="categorie" value="siervuurwerk"> knalvuurwerk</br>

    <input type="submit" name="verzenden" value="opslaan">
</form>
</body>
</html>
