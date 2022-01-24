<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-create-auto1.php</title>
        <link rel="stylesheet" href="style.css">
        <style>
        body{
        margin-left: 35%;
        margin-top: 10%;
        }
        input[type=submit]{
        margin-left: 59px;
        }
        </style>
	</head>
	<body>
		<h1>Garage create auto 1</h1>
		<p>Dit formulier wordt gebruikt om autogegevens in te voeren.</p>
		<form action="gar-create-auto2.php" method="post">
			autokenteken: <input type="text" name="autokentekenvak" required><br/>
			automerk: <input type="text" name="automerkvak" required><br/>
			autotype: <input type="text" name="autotypevak" required><br/>
			autokmstand: <input type="text" name="autokmstandvak" required><br/>
			klantID: <input type="text" name="klantidvak" required><br/>
			<input type="submit">
		</form>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>