<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-search-klant2.php</title>
	</head>
	<body>
		<h1>Garage zoek op klantID 2</h1>
		<p>Op klantID gegevens zoeken uit de tabel "klanten" van de database "garage".</p>
		<?php
			$klantid = $_POST["klantidvak"];
			
			require_once "connectie.php";
			
			$klanten = $conn->prepare("
										select	klantid,
												klantnaam,
												klantadres,
												klantpostcode,
												klantplaats
										from	klant
										where	klantid = :klantid
									");
			$klanten->execute(["klantid" => $klantid]);
			
			echo "<table>";
			foreach($klanten as $klant)
            {
				echo "<tr>";
					echo "<td>" . $klant["klantid"]      . "</td>";
					echo "<td>" . $klant["klantnaam"]    . "</td>";
					echo "<td>" . $klant["klantadres"]   . "</td>";
					echo "<td>" . $klant["klantpostcode"]. "</td>";
					echo "<td>" . $klant["klantplaats"]  . "</td>";
				echo "</tr>";
			}
			echo "</table><br />";
			echo "<a href='index.php' terug naar het menu.</a>";
		?>
	</body>
</html>