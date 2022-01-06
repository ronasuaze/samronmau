<?php
error_reporting( E_ALL );
ini_set("display_errors", "on");

function SQLMetResult($db, $commando){
    $query = $db->prepare($commando);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

$db = new PDO("mysql:host=localhost;dbname=garage_ertan", "root", "root" );
