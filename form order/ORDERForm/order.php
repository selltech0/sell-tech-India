<?php  include('jord.php');  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="row">
      <div class="col-75">
        <div class="container">
          <form action="#" method="POST">
            <div class="row">
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input 
                  type="text"
                  id="fname"
                  name="firstname"
                  placeholder="John M. Doe"
                />
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input
                  type="text"
                  id="email"
                  name="email"
                  placeholder="john@example.com"
                />
                <label for="adr"
                  ><i class="fa fa-address-card-o"></i> Address</label
                >
                <input
                  type="text"
                  id="adr"
                  name="address"
                  placeholder="542 W. 15th Street"
                />
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input
                  type="text"
                  id="city"
                  name="city"
                  placeholder="New York"
                />

                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>
                    <input
                      type="text"
                      id="state"
                      name="state"
                      placeholder="NY"
                    />
                  </div>
                  <div class="col-50">
                    <label for="zip">Zip</label>
                    <input
                      type="text"
                      id="zip"
                      name="zip"
                      placeholder="10001"
                    />
                  </div>
                </div>
              </div>

              <div class="col-50">
                <h3>Attachment</h3>
                
                  <div class="container">
                    <div class="button-wrap">
                      <label class="button" for="upload">Inpot your company logo</label>
                      <input id="upload" type="file" name="file">
                    </div>
                  </div>
                  <br>
                  <div class="container2">
                    <div class="button-wrap2">
                      <label class="button2" for="upload">File do you add in websits.</label>
                      <input id="upload2" type="file" name="file2">
                    </div>
                  </div>
                  <br>
                  <label for="wname">Website Name</label>
                <input 
                  type="text"
                  id="Wname"
                  name="wname"
                  placeholder="selltech"
                />
                <br>
                <label for="wtype">Website Type</label>
                <input 
                  type="text"
                  id="Wtype"
                  name="wtype"
                  placeholder="eCommerce , Business , Blog , etc"
                />


              </div>
            </div>
            <label>
              <input type="checkbox" checked="checked" name="sameadr" />
              Shipping address same as billing
            </label>
            <input id="submit" type="submit" value="Continue to checkout" class="btn" name="submit" ></input>          
        </div>
      </div>
      <div class="col-25">
        <div class="container">
          <label for="Pack">Enter Your Package : </label>

          <select name="pack" id="cars">
            <option value="No selected">-No Selected-</option>
            <option value="bronze">Bronze Package</option>
            <option value="gold">Gold Package</option>
            <option value="diamond">Diamond Package</option>
          </select>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>






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
      // echo "data ok";
     }
     else{
      echo "not ok";
     }



    }



?>
