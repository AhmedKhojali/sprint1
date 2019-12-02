<?php

include 'DatabaseInlog.php';

    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        if (isset ($_POST['verzenden'])) {
            $voornaam = filter_input(INPUT_POST, "voornaam", FILTER_SANITIZE_STRING);
            $achternaam = filter_input(INPUT_POST, "achternaam", FILTER_SANITIZE_STRING);
            $afspraak = filter_input(INPUT_POST, "afspraak", FILTER_SANITIZE_STRING);
            $tijd = filter_input(INPUT_POST, "tijd", FILTER_SANITIZE_STRING);
            $query = $db->prepare("INSERT INTO afspraken(Voornaam, Achternaam, Afspraak, Tijd) VALUES(:voornaam, :achternaam, :afspraak, :tijd)");
            $query->bindParam("voornaam", $voornaam);
            $query->bindParam("achternaam", $achternaam);
            $query->bindParam("afspraak", $afspraak);
            $query->bindParam("tijd", $tijd);
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
