<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-delete-auto1.php</title>
        <link rel="stylesheet" href="stylesheet.css">
	</head>
	<body>
		<h1>Garage delete auto 1</h1>
		<p>Dit formulier zoekt een auto op uit de tabel "auto" van database "garage" om hem te kunnen verwijderen.</p>
		<form action="gar-delete-auto2.php" method="post">
			Welk kenteken wilt u verwijderen?
			<input type="text" name="autokentekenvak"><br/>
			<input type="submit">
		</form>
	</body>
</html>