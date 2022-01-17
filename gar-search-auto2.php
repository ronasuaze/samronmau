<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-search-auto2.php</title>
        <link href="stylesheet.css">
	</head>
	<body>
		<h1>Garage zoek op kenteken 2</h1>
		<p>Op kenteken gegevens zoeken uit de tabel "auto" van de database "garage".</p>
		<?php
			$autokenteken = $_POST["autokentekenvak"];
			
			require_once "connectie.php";
			
			$autos = $conn->prepare("
										select	klantid,
												autokenteken,
												automerk,
												autotype,
												autokmstand
										from	auto
										where	autokenteken = :autokenteken
									");
			$autos->execute(["autokenteken" => $autokenteken]);
			
			echo "<table>";
			foreach($autos as $auto) {
				echo "<tr>";
					echo "<td>" . $auto["klantid"] . "</td>";
					echo "<td>" . $auto["autokenteken"] . "</td>";
					echo "<td>" . $auto["automerk"] . "</td>";
					echo "<td>" . $auto["autotype"] . "</td>";
					echo "<td>" . $auto["autokmstand"] . "</td>";
				echo "</tr>";
			}
			echo "</table><br/>";
			echo "<a href='index.php' terug naar het menu.</a>";
		?>
	</body>
</html>