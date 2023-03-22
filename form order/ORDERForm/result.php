<?php
error_reporting(0);

    if($_POST['submit']){

     $fname   = $_POST['firstname'];
     $email   = $_POST['email'];
     $add     = $_POST['address'];
     $city    = $_POST['city'];
     $state   = $_POST['state'];
     $zip     = $_POST['zip'];
     $file    = $_POST['file'];
     $file2   = $_POST['file2'];
     $pak     = $_POST['pack'];
     $wname     = $_POST['wname'];
     $wtype     = $_POST['wtype'];
     
     $query = "INSERT INTO form_data values('$fname','$email','$add','$city','$state','$zip','$file','$file2','$cars','$wname','$wtype')";

     $data = mysqli_query($co,$query);

     if($data){
       echo "data ok";
     }
     else{
      echo "not ok";
     }



    }