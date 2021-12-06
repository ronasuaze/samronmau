
<form method="post">
    <label>
        ID
        <input type="number" name="id">
    </label>
    <input type="submit">
</form>
<?php
    include "databaseConnectie.php";
    global $db;

    if(isset($_post["submit"])){
        $results = SQLMetResult($db, "SELECT * FROM klant WHERE id = :idplaceholder",
        ["idplaceholder"=> $_post["id"]]);

        if(count($results) == 0){
            echo "geen resultaat";
        }
        else{

        }
    }



