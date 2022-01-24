<?php
session_start() ;
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            $sql1 = "SELECT Functie from users where username ='{$uname}'";
            $result1 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_array($result1);
            $_SESSION["Functie"] =  $row1["Functie"];
            $Functie =  $row1["Functie"];

            switch ($Functie) {


                case 'Directie' :

                { header('Location: Monteur&directie.php');break;}
                case 'Monteur':
                { header('Location: Monteur&directie.php');break;}
                case 'Planner':
                { header('Location: Planner&Sbeheerder.php');break;}
                case 'Systeembeheerder' :
                { header('Location: Planner&Sbeheerder.php');break;}
                default:
                { header('Location: Uitloggen.php');break;}

            }
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
    <head>
        <title>Login</title>
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
        <style>
            body{
                background: linear-gradient(135deg, #89f5ec 0%, #ffffff 100%);
            }
        #div_login input[type=submit] {
        padding: 7px;
        }
        #div_login .textbox {
            width: 96%;
            padding: 8px;
            border-radius: 4px;
        }

        </style>
        <style>
            body{
                background: linear-gradient(135deg, #89f5ec 0%, #ffffff 100%);
            }
        </style>
    </head>
    <body>

        <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Login Garage Ertan</h1>

                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" required />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password" required/>
                    </div>
                    <div class="knopje">
                        <input type="submit" value="Log in" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
        </div>
    </body>
</html>

