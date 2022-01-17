<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-delete-auto3.php</title>
	</head>
	<body>
		<h1>Garage delete auto 3</h1>
		<p>Op kenteken gegevens zoeken uit de tabel "auto" van de database "garage" zodat ze verwijderd kunnen worden.</p>
		<?php
			$autokenteken = $_POST["autokentekenvak"];
			$verwijderen = $_POST["verwijdervak"];
			
			if($verwijderen) {
				require_once "connectie.php";
				
				$sql = $conn->prepare("
										delete from auto
										where autokenteken = :autokenteken
									");
				$sql->execute(["autokenteken" => $autokenteken]);
				
				echo "De gegevens zijn verwijderd.<br/>";
			}
			else {
				echo "De gegevens zijn niet verwijderd.<br/>";
			}
			
			echo "<a href='index.php'>Terug naar het menu.</a>";
		?>
	</body>
</html>