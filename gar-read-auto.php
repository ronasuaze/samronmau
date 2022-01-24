<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-read-auto.php</title>
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
        <h3 align="">Garage read auto</h3><br />
        <p>Dit zijn alle gegevens uit de tabel "auto" van de database "garage".</p>
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>Klantid</th>
                    <th>Autokenteken</th>
                    <th>Automerk</th>
                    <th>Autotype</th>
                    <th>Autokmstand</th>
                </tr>
		<?php
			require_once "connectie.php";
			
			$autos = $conn->prepare("
										select	klantid,
												autokenteken,
												automerk,
												autotype,
												autokmstand
										from	auto
									");
			$autos->execute();

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