<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-delete-klant1.php</title>
	</head>
	<body>
		<h1>Garage delete klant 1</h1>
		<p> Dit formulier zoekt een klant op uit
            de tabel "klanten" van database "garage"
            om hem te kunnen verwijderen.
        </p>
		<form action="gar-delete-klant2.php" method="post">
			Welk klantID wilt u verwijderen?
			<input type="text" name="klantidvak">  <br />
			<input type="submit">
		</form>
	</body>
</html>