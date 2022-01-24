<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-update-auto1.php</title>
        <link rel="stylesheet" href="style.css">
        <style>
            input[type=submit]{
                margin-left: 205px;
            }
        </style>
	</head>
	<body>
		<h1>Garage update auto 1 </h1>
		<p>Dit formulier wordt gebruikt om autogegevens te wijzigen.</p>
		<form action="gar-update-auto2.php" method="post">
			Welk kenteken wilt u wijzigen?
			<input type="text" name="autokentekenvak" required><br/>
            <input type="submit">
		</form>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>