<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>profiell1.php</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h1>Wijzig usergegevens</h1>
<p>
    Dit formulier wordt gebruikt om usergegevens te wijzigen.
</p>
<form action="profiel2.php" method="post">
    Welk userID wilt u wijzigen?
    <input type="text" name="idvak">  <br />
    <input type="submit">
</form>
<?php
include_once "Terugknop.php";
?>
</body>
</html>
