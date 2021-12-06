<?php
    include "databaseConnectie.php";
    global $db;

        $alleklanten = SQLMetResult($db, "SELECT * FROM klant");
    foreach ($alleklanten as $klant){
        echo $klant["id"] . "\t";
        echo $klant["naam"] . "\t";
        echo $klant["adres"] . "\t";
        echo $klant["postcode"] . "\t";
        echo $klant["e-mail"] . "\t";
        echo $klant["telefoonnummer"] . "\t";
        echo "<br>";
    }