<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-update-klant3.php</title>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Garage update klant 3</h1>
		<p>Klant gegevens wijzigen in de
            tabel "klant" van de database "garage".
        </p>
		<?php
			$klantid        = $_POST["klantidvak"];
			$klantnaam      = $_POST["klantnaamvak"];
			$klantadres     = $_POST["klantadresvak"];
			$klantpostcode  = $_POST["klantpostcodevak"];
			$klantplaats    = $_POST["klantplaatsvak"];
			
			require_once "connectie.php";
			
			$sql = $conn->prepare
			("
				update klant set	klantnaam 		= :klantnaam,
									klantadres 		= :klantadres,
									klantpostcode 	= :klantpostcode,
									klantplaats 	= :klantplaats
							        where	klantid = :klantid
			");
			
			$sql->execute([
				"klantid"		=> $klantid,
				"klantnaam"		=> $klantnaam,
				"klantadres"	=> $klantadres,
				"klantpostcode"	=> $klantpostcode,
				"klantplaats"	=> $klantplaats
			]);
			
			echo "De klant is gewijzigd.<br />";
			echo "<a href='Planner&Sbeheerder.php'> terug</a>";
		?>
	</body>
    <?php
    include_once "Terugknop.php";
    ?>
</html>