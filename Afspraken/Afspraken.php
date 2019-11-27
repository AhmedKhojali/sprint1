<html>
<head>
    <title>Afspraken</title>
    <style>
        a{
            color: blueviolet;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php

include 'FunctieCreateDatabase.php';
include 'FunctieCreateTable.php';

CreateDatabase('vuurwerk');
CreateTable('afspraken');

?>
<a href="FunctieInsertTable.php">Klik hier om een afspraak toe te voegen en naar de afspraken tabel te gaan.</a>
</body>
</html>


