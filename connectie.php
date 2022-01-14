<?php
    $servername = "localhost";
    $dbname = "garage_ertan";
    $username = "root";
    $password = "root";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connectie met de database is gelukt! <br/>";
}
    catch(PDOException $e) {
        echo "Connectie is mislukt: " . $e->getMessage() . " :( ";
}
?>