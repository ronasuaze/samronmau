<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-create-klant1.php</title>
        <link rel="stylesheet" href="style.css">
<style>
        body{
           margin-left: 35%;
        }
        input[type=submit]{
            margin-left: 84px;
        }

         body{
           background: #9ca5dc;
         }

</style>
	</head>
	<body>
		<h1>Garage create klant 1</h1>
		<p>
            Dit formulier wordt gebruikt om klantgegevens in te voeren.
        </p>
		<form action="gar-create-klant2.php" method="post">
			Klantnaam:     <input type="text" name="klantnaamvak" required>    <br/>
			Klantadres:    <input type="text" name="klantadresvak" required>   <br/>
			Klantpostcode: <input type="text" name="klantpostcodevak" required><br/>
			Klantplaats:   <input type="text" name="klantplaatsvak" required>  <br/>
			<input type="submit">
		</form>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>