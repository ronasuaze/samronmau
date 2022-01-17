<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-create-klant2.php</title>
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
						
			echo "De klant is toegevoegd <br />";
			echo "<a href='index.php' terug naar het menu.</a>";
		?>
	</body>
</html>