<?php include 'functions.php';
?>
<h1>garage create klant</h1>
<p>
    Dit formulier wordt gebruikt om klantgegevens in te voeren.
</p>
<form action="create-klant.php" method="post">
    <label>
        naam:
        <input type="text" name="klantnaamvak">
    </label>
    <label>
        adres:
        <input type="text" name="klantadresvak">
    </label>
    <label>
        postcode:
        <input type="text" name="klantpostcodevak">
    </label>
    <label>
        E-mail:
        <input type="text" name="klantE-mailsvak">
    </label>
    <label>
        telefoonnummer:
        <input type="text" name="klanttelefoonnummersvak">
    </label>
    <input type="submit">
</form>