<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-delete-klant3.php</title>
        <link rel="stylesheet" href="stylesheet.css">
	</head>
	<body>
		<h1>Garage delete klant 3</h1>
		<p>
            Op klantID gegevens zoeken uit de
            tabel "klanten" van de database "garage"
            zodat ze verwijderd kunnen worden.
        </p>
		<?php
			$klantid          = $_POST["klantidvak"];
			$verwijderen      = $_POST["verwijdervak"];
			
			if($verwijderen) {
				require_once "connectie.php";
				
				$sql = $conn->prepare("
										delete from klant
										where klantid = :klantid
									");
				$sql->execute(["klantid" => $klantid]);
				
				echo "De gegevens zijn verwijderd.<br/>";
			}
			else {
				echo "De gegevens zijn niet verwijderd.<br />";
			}
			
			echo "<a href='index.php'>Terug naar het menu.</a>";
		?>
	</body>
</html>