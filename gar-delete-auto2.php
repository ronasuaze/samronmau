<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-delete-auto2.php</title>
        <link rel="stylesheet" href="style.css">
        <style>
            input[type=submit]{
                margin-left: 3px;
            }
        </style>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Garage delete auto 2</h1>
		<p>Op kenteken gegevens zoeken uit de tabel "auto" van de database "garage" zodat ze verwijderd kunnen worden.</p>
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
			
			echo "<form action='gar-delete-auto3.php' method='post'>";
				echo "<input type='hidden' name='autokentekenvak' value=$autokenteken>";
				echo "<input type='hidden' name='verwijdervak' value='0'>";
				echo "<input type='checkbox' name='verwijdervak' value='1'>";
				echo "Verwijder deze auto. <br/>";
				echo "<input type='submit'>";
			echo "</form>";
		?>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>