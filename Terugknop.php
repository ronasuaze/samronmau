<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>


<?php
include "config.php";


switch ($_SESSION["Functie"]) {


    case 'Directie' :

        echo "<a href='Monteur&directie.php'> Terug</a>";break;
    case 'Monteur':
        echo "<a href='Monteur&directie.php'> Terug</a>";break;
    case 'Planner':
        echo "<a href='Planner&Sbeheerder.php'>Terug </a>";break;
    case 'Systeembeheerder' :
        echo " <a href='Planner&Sbeheerder.php'>Terug</a>";break;
    default:
        echo "<a href='Uitloggen.php'></a>" ;break;

}

?>
</body>
</html>