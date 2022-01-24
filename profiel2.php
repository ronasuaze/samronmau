<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>profiell2.php</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body{
           font-family: "Roboto", sans-serif;
            background: #ffffff;
            margin-left: 30%;
            margin-top: 10%;
        }
        input[type=text], select {
            width: 50%;
        }
        input[type=submit] {
            width: 25%;
           margin-left: 62px;
        }
        a{
            text-decoration: none;
            color: #0c93e4;
        }
    </style>
</head>
<body>
<h1>Profiel wijzigen</h1>
<p>Dit formulier wordt gebruikt om usergegevens te wijzigen
    in de tabel "user" van de database "garage".
</p>
<?php

include "config.php";
require_once "connectie.php";

$username= $_SESSION['uname'];
$users = $conn->prepare("
										      select  id,
												      username,
												      naam,
												      password,
										             Functie
										      from	  users
										      where	  username = '{$username}'
									");
$users->execute();

echo "<form action='profiel3.php' method='post'>";
foreach($users as $user) {
    echo " id: " . $user["id"];
    echo " <input type='hidden' name='idvak' ";
    echo " value=' " .$user["id"]. "' ";
    echo " > <br />";

    echo " username: <input type='text' ";
    echo " name = 'usernamevak' ";
    echo " value = '" .$user["username"]. "' ";
    echo " > <br />";

    echo " naam: <input type='text' ";
    echo " name = 'naamvak' ";
    echo " value = '" .$user["naam"]. "' ";
    echo " > <br />";

    echo " password: <input type='text' ";
    echo " name = 'passwordvak' ";
    echo " value = '" .$user["password"]. "' ";

    echo " > <br />";
    echo " Functie: <input type='text' ";
    echo " name = 'Functievak' ";
    echo " value = '" .$user["Functie"]. "' ";
    echo " > <br />";

}
echo "<input type='submit'>";
echo "</form>";

?>

<?php
include_once "Terugknop.php";
?>

</body>
</html>
