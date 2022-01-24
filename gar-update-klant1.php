<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-update-klant1.php</title>
        <link rel="stylesheet" href="style.css">
	</head>
    <style>
        input[type=submit]{
            margin-left: 205px;
        }
    </style>
	<body>
		<h1>Garage update klant 1</h1>
		<p>
            Dit formulier wordt gebruikt om klantgegevens te wijzigen.
        </p>
		<form action="gar-update-klant2.php" method="post">
			Welk klantID wilt u wijzigen?
			<input type="text" name="klantidvak" required>  <br />
			<input type="submit">
		</form>
	</body>
    <?php
    include_once "Terugknop.php";
    ?>
</html>