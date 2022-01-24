<!doctype html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<title>gar-update-auto2.php</title>
        <link rel="stylesheet" href="style.css">
        <style>
            body{
                margin-top: 10%;
            }
            input[type=submit]{
                margin-left: 100px;
            }
        </style>
	</head>
	<body>
		<h1>Garage update auto 2</h1>
		<p>Dit formulier wordt gebruikt om autogegevens te wijzigen in de tabel "auto" van de database "garage".</p>
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
echo "</br>";
        $count = $autos->rowCount();
        if ($count <=0 )
        {echo " auto bestaat niet !"  ;}



			
			echo "<form action='gar-update-auto3.php' method='post'>";
				foreach($autos as $auto) {
					echo " klantid: <input type='text' ";
					echo " name = 'klantidvak' ";
					echo " value = '" .$auto["klantid"]. "' ";
					echo " > <br/>";
					
					echo " autokenteken: <input type='text' ";
					echo " name = 'autokentekenvak' ";
					echo " value = '" .$auto["autokenteken"]. "' ";
					echo " > <br/>";
					
					echo " automerk: <input type='text' ";
					echo " name = 'automerkvak' ";
					echo " value = '" .$auto["automerk"]. "' ";
					echo " > <br/>";
					
					echo " autotype: <input type='text' ";
					echo " name = 'autotypevak' ";
					echo " value = '" .$auto["autotype"]. "' ";
					echo " > <br/>";
					
					echo " autokmstand: <input type='text' ";
					echo " name = 'autokmstandvak' ";
					echo " value = '" .$auto["autokmstand"]. "' ";
					echo " > <br/>";
				}
        if ($count >0 ) {
            echo "<input type='submit'>";
        }
			echo "</form>";
		?>
        <?php
        include_once "Terugknop.php";
        ?>
	</body>
</html>