<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-delete-klant3.php</title>
        <link rel="stylesheet" href="style.css">
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

                $stmt = $conn->prepare("SELECT count(*) FROM auto WHERE klantid= :klantid");
                $stmt->execute(["klantid" => $klantid]);
                $count = $stmt->fetchColumn();
                if ($count > 0) {
                    echo "Klant kan niet verwijderd worden";
                } else {


                    $sql = $conn->prepare("
										delete from klant
										where klantid = :klantid
									");
                    $sql->execute(["klantid" => $klantid]);

                    echo "De gegevens zijn verwijderd.<br/>";
                }
            }
			else
            {
				echo "De gegevens zijn niet verwijderd.<br />";
			}

		?>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>