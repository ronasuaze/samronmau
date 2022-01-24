<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-create-auto2.php</title>
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
		<h1>Garage auto 2</h1>
		<p>Een auto toevoegen aan de tabel "auto" in de database "garage".</p>
		<?php
			$autokenteken = $_POST["autokentekenvak"];
			$automerk = $_POST["automerkvak"];
			$autotype = $_POST["autotypevak"];
			$autokmstand = $_POST["autokmstandvak"];
			$klantid = $_POST["klantidvak"];
			
			require_once "connectie.php";
			
			$sql = $conn->prepare("insert into auto values(:autokenteken, :automerk, :autotype, :autokmstand, :klantid)");
			
			$sql->execute([
							"autokenteken" 	=> $autokenteken,
							"automerk"		=> $automerk,
							"autotype"		=> $autotype,
							"autokmstand" 	=> $autokmstand,
							"klantid" 		=> $klantid
						]);
						
			echo "De auto is toegevoegd <br/>";
		?>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>