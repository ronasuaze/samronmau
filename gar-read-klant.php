<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-read-klant.php</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style> a{
                text-decoration: none;
                color: #0c93e4;
            }

        </style>
	</head>
	<body>
    <div class="container" style="width:500px;">
        <h3 align="">Garage read klant</h3><br />
        Dit zijn alle gegevens uit de tabel "klanten" van de database "garage".
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Klantid</th>
                    <th>Klantnaam</th>
                    <th>Klantadres</th>
                    <th>Klantpostcode</th>
                    <th>Klantplaats</th>
                </tr>

		<?php
        require_once "connectie.php";
			
			$klanten = $conn->prepare("
										select	klantid,
												klantnaam,
												klantadres,
												klantpostcode,
												klantplaats
										from	klant
									");
			$klanten->execute();

				foreach($klanten as $klant) {
					echo "<tr>";
						echo "<td>" . $klant["klantid"] . "</td>";
						echo "<td>" . $klant["klantnaam"] . "</td>";
						echo "<td>" . $klant["klantadres"] . "</td>";
						echo "<td>" . $klant["klantpostcode"] . "</td>";
						echo "<td>" . $klant["klantplaats"] . "</td>";
					echo "</tr>";
				}
		?>
            </table>
            <?php
            include_once "Terugknop.php";
            ?>
	</body>
</html>
