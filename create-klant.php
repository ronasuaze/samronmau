<?php include 'functions.php';
?>
<h1>garage create klant</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens in te voeren.
</p>
<form action="create-klant.php" method="post">
    klantID: <input type="text" name="klantIDvak">
    klantnaam: <input type="text" name="klantnaamvak">
    klantadres: <input type="text" name="klantadresvak">
    klantpostcode: <input type="text" name="klantpostcodevak">
    klantE-mail: <input type="text" name="klantE-mailsvak">
    klanttelefoonnummer: <input type="text" name="klanttelefoonnummersvak">
    <input type="submit">
</form>