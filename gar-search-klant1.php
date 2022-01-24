<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-search-klant1.php</title>
        <link rel="stylesheet" href="style.css">

	</head>
	<body>
		<h1>Garage zoek op klantID 1</h1>
		<p>
            Dit formulier zoekt een klant op uit
            de tabel "klanten" van database "garage".
        </p>
		<form action="gar-search-klant2.php" method="post">
			Welk klantID zoekt u?
			<input type="text" name="klantidvak" required><br />
			<input type="submit">
		</form>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>