<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$hhh = mysqli_connect($servername,$username,$password,$dbname);

if($hhh){
    //echo "Connection ok";
}
else{
    echo "Connection failed";
}

?>