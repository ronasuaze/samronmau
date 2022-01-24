<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-search-auto1.php</title>
        <link rel="stylesheet" href="style.css">
        <style>
            input[type=submit]{
                margin-left: 174px;
            }
        </style>
	</head>
	<body>
		<h1>Garage zoek op kenteken 1</h1>
		<p>Dit formulier zoekt een auto op uit de tabel "auto" van database "garage".</p>
		<form action="gar-search-auto2.php" method="post">
			Welk kenteken zoekt u?
			<input type="text" name="autokentekenvak" required><br/>
			<input type="submit">
		</form>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>