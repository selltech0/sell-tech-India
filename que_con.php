<?php

    $sname = "localhost";
    $uname = "id20360984_selltech";
    $pass = "Kt[=mj0N]8[8Q]%y";
    $dbename = "id20360984_sell_tech";


    error_reporting(0); 
   
    $conn = mysqli_connect($sname,$uname,$pass,$dbename);
    if($_POST['submit']){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $mass = $_POST['massage'];

        $query = "INSERT INTO qoute_table values('$name','$email','$service','$mass')";

        $data = mysqli_query($conn,$query);

        if($data){
            //echo "ok";
        }

        else{
            echo "not ok";
        }


        }
    
    
    ?>