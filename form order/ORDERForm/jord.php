<?php

$sname = "localhost";
$uname = "id20360984_selltech";
$pass = "Kt[=mj0N]8[8Q]%y";
$dbename = "id20360984_sell_tech";
error_reporting(0);
$co = mysqli_connect($sname , $uname , $pass , $dbname);

  

if($co){
   // echo "pass";
}
else{
    echo "fail";
}
?>

