<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-search-auto2.php</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
    <div class="container" style="width:500px;">
        <h3 align="">Garage zoek op kenteken 2</h3><br />
        <p>Op kenteken gegevens zoeken uit de tabel "auto" van de database "garage".</p>
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
			$autokenteken = $_POST["autokentekenvak"];
			
			require_once "connectie.php";
			
			$autos = $conn->prepare("
										select	klantid,
												autokenteken,
												automerk,
												autotype,
												autokmstand
										from	auto 
										where	autokenteken =  :autokenteken
									");
			$autos->execute(["autokenteken" => $autokenteken]);
			

			foreach($autos as $auto) {
				echo "<tr>";
					echo "<td>" . $auto["klantid"] . "</td>";
					echo "<td>" . $auto["autokenteken"] . "</td>";
					echo "<td>" . $auto["automerk"] . "</td>";
					echo "<td>" . $auto["autotype"] . "</td>";
					echo "<td>" . $auto["autokmstand"] . "</td>";
				echo "</tr>";
			}

		?>
            </table>
            <?php
            include_once "Terugknop.php";
            ?>
	</body>
</html>