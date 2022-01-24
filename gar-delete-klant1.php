<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-delete-klant1.php</title>
        <link rel="stylesheet" href="style.css">
        <style>
        input[type=submit]{
        margin-left: 230px;
        }
        </style>
	</head>
	<body>
		<h1>Garage delete klant 1</h1>
		<p> Dit formulier zoekt een klant op uit
            de tabel "klanten" van database "garage"
            om hem te kunnen verwijderen.
        </p>
		<form action="gar-delete-klant2.php" method="post">
			Welk klantID wilt u verwijderen?
			<input type="text" name="klantidvak" required>  <br />
			<input type="submit">
		</form>
	</body>
    <?php
    include_once "Terugknop.php";
    ?>
</html>