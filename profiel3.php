<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>profiell3.php</title>
    <link rel="stylesheet" href="style.css">
   <style>

       body{
           font-family: "Roboto", sans-serif;
           margin-left: 40%;
           margin-top: 15%;
       }
        a{
            text-decoration: none;
            color: #0c93e4;
        }
   </style>
</head>
<body>
<h1>Profiel wijzigen</h1>
<p>User gegevens wijzigen in de
    tabel "user" van de database "garage".
</p>
<?php
require_once "connectie.php";
$id        = $_POST["idvak"];
$username      = $_POST["usernamevak"];
$Functie     = $_POST["Functievak"];
$password  = $_POST["passwordvak"];
$naam  = $_POST["naamvak"];



$sql = $conn->prepare
("
				update users set	username 	= :username,
									Functie 		= :Functie,
									password 	= :password,
				                    naam        = :naam
							        where	id = :id
			");

$sql->execute([
    "id"		=> $id,
    "username"		=> $username,
    "Functie"	=> $Functie,
    "password"	=> $password,
    "naam"    =>$naam

]);

?>
<p>De user is gewijzigd.</p>
<?php
include_once "Terugknop.php";
?>
</body>
</html>
