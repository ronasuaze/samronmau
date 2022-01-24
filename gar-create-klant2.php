<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-create-klant2.php</title>
        <style>
        body{
        font-family: "Roboto", sans-serif;
        margin-left: 40%;
        margin-top: 15%;
        }
        </style>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Garage klant 2</h1>
		<p>
            Een klant toevoegen aan de tabel "klant" in de database "garage".
        </p>
		<?php
			$klantid       = NULL;
			$klantnaam     = $_POST["klantnaamvak"];
			$klantadres    = $_POST["klantadresvak"];
			$klantpostcode = $_POST["klantpostcodevak"];
			$klantplaats   = $_POST["klantplaatsvak"];
			
			require_once "connectie.php";

			$sql = $conn->prepare("insert into klant values(:klantid, :klantnaam, :klantadres, :klantpostcode, :klantplaats)");
			
			$sql->execute([
							"klantid" 		=> $klantid,
							"klantnaam" 	=> $klantnaam,
							"klantadres" 	=> $klantadres,
							"klantpostcode"	=> $klantpostcode,
							"klantplaats" 	=> $klantplaats
						]);
				echo "<br/>";
			echo "De klant is toegevoegd <br />";

		?>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>