<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');
//gar-connect.php
//maakt een connectie met de database 'garage'
$servername="localhost";
$db="garage";
$username="root";
$password=" ";
try {
    $conn = new PDO("mysql:host=$servername;db=$db",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connectie gelukt <br />";
    }
catch(PDOException $e)
{
    echo "connectie mislukt:" . $e->getMessage();
}
