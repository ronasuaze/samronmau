<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-update-auto3.php</title>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Garage update auto 3</h1>
		<p>Auto gegevens wijzigen in de tabel "auto" van de database "garage".</p>
		<?php
			$klantid = $_POST["klantidvak"];
			$autokenteken = $_POST["autokentekenvak"];
			$automerk = $_POST["automerkvak"];
			$autotype = $_POST["autotypevak"];
			$autokmstand = $_POST["autokmstandvak"];
			
			require_once "connectie.php";
			
			$sql = $conn->prepare
			("
				update auto set		autokenteken 	= :autokenteken,
									automerk 		= :automerk,
									autotype 		= :autotype,
									autokmstand 	= :autokmstand
							where	klantid 		= :klantid
			");
			
			$sql->execute([
				"klantid"		=> $klantid,
				"autokenteken"	=> $autokenteken,
				"automerk"		=> $automerk,
				"autotype"		=> $autotype,
				"autokmstand"	=> $autokmstand
			]);
			
			echo "De auto is gewijzigd.<br/>";
		?>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>