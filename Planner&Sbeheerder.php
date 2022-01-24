<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="stylesheet.css"><font-awesome-icon icon="fa-solid fa-car" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        p { font-size: 19px; }

    </style>

</head>
<body>
<?php
include "config.php";
?>
<div class='brand'>

</div>
<!-- / Begin Body -->

<div class='swanky'>
    <!-- / Introduction Block -->
    <div class='swanky_title'>
        <h1>Garage Ertan</h1>

        <p>Dit is een online webapplicatie
            die kan worden gebruikt om de klanten van de garage bij te houden. De klanten komen bij het garagebedrijf om hun
            auto’s te laten keuren of te repareren. Hier kan je dus ook de gegevens van de auto's bijhouden.
        </p>

        </a>
        </a>
    </div>
</div>
<!-- /////////// Begin Dropdown //////////// -->
<div class='swanky_wrapper'>
    <input id='Dashboard' name='radio' type='radio'>
    <label for='Dashboard'>
        <i class="fa regular fa-address-card"></i>
        <span>Profiel</span>
        <div class='lil_arrow'></div>
        <div class='bar'></div>
        <div class='swanky_wrapper__content'>
            <ul>
                <li><a href="profiel2.php">Profiel aanpassen</a></li>
            </ul>
        </div>
    </label>

    <input id='Sales' name='radio' type='radio'>
    <label for='Sales'>
        <i class="fa thin fa-user"></i>
        <span>Klant</span>
        <div class='lil_arrow'></div>
        <div class='bar'></div>
        <div class='swanky_wrapper__content'>
            <ul>
                <li><a href="gar-create-klant1.php">  Create             </a></li>
                <li><a href="gar-search-klant1.php">  Search             </a></li>
                <li><a href="gar-read-klant.php">  Read             </a></li>
                <li><a href="gar-update-klant1.php">  Update             </a></li>
                <li><a href="gar-delete-klant1.php">  Delete             </a></li>
            </ul>
        </div>
    </label>
    <input id='Messages' name='radio' type='radio'>
    <label for='Messages'>
        <i class="fa regular fa-car"></i>
        <span>Auto</span>
        <div class='lil_arrow'></div>
        <div class='bar'></div>
        <div class='swanky_wrapper__content'>
            <ul>
                <li><a href="gar-create-auto1.php">  Create            </a></li>
                <li><a href="gar-search-auto1.php">  Search             </a></li>
                <li><a href="gar-read-auto.php">  Read             </a></li>
                <li><a href="gar-update-auto1.php">  Update             </a></li>
            </ul>
        </div>
    </label>
    </label>
    <input id='Settings' radio='radio' type='radio'>
    <label for='Settings'>
        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/set.png'>
        <span>Delete&Extra</span>
        <div class='lil_arrow'></div>
        <div class='swanky_wrapper__content'>
            <ul>
                <li><a href="Autometklant.php">  Auto's van klanten           </a></li>
                <li><a href="Typeautometklant.php">  Type auto's van klanten            </a></li>
                <li><a href="gar-delete-klant1.php">  Delete klant             </a></li>
                <li><a href="gar-delete-auto1.php">  Delete auto            </a></li>
            </ul>
        </div>
    </label>
</div>


</div>
<!-- /////////// End Dropdown //////////// -->
</div>
<!-- / My Footer -->
<div class='love'>
    <p>Gemaakt door Sami </a></p>
</div>
<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>
<!doctype html>
<html>
<head></head>
<div class="loguit">
    <form method='post' action="">
        <input type="submit" value="Logout" name="but_logout">
    </form>
</div>
</html>




</body>
</html>

