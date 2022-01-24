<?php
$connect = mysqli_connect("localhost", "root", "root", "garage ertan");
$sql = "SELECT a.* ,b.*FROM klant a, auto b where a.klantid = b.klantid ";
$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="">
<head>
    <title></title>
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
<br />
<div class="container" style="width:500px;">
    <h3 align="">De auto's van de klanten</h3><br />
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Klantnaam</th>
                <th>Autotype</th>
            </tr>
            <?php
            if(mysqli_num_rows($result) > 0)
            {

                $teller=0;
                while($row = mysqli_fetch_array($result) )
                {
                    ?>
                    <tr>
                        <td><?php echo $row["klantnaam"];?></td>
                        <td><?php echo $row["autotype"]; ?></td>
                    </tr>
                    <?php

                }
            }
            ?>
        </table>
        <?php
        include_once "Terugknop.php";
        ?>
    </div>
</div>
<br />
</body>
</html>
