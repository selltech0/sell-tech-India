
<?php include("co.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="/hh/css/style.css">

</head>
<body>

    <div class="alert-box">
        <p class="alert"></p>
    </div>

    <form action="/hh/login.php" method="POST">

    <div class="form">
        <h1 class="heading">login</h1>
        <input type="email" placeholder="email" autocomplete="off" class="email" required name="email">
        <input type="password" placeholder="password" autocomplete="off" class="password" name="password" required>
        <input type="submit" value="log in" class="btn" onclick="openpopup()" name="login">
        <a href="register.php" class="link">don't have an account? Register one</a>
    </div>
    </form>
    <div class="popup" id="popup">
            <img src="404-tick.png" alt="">
            <h2>Thank You!</h2>
            <p>Your details has been successfully submitted . Thanks!</p>
           <a href="/index.php"> <button type="button" onclick="closepopup()">OK</button></a>
        </div> 
    <script>
        let popup = document.getElementById("popup");
        function openpopup(){
            popup.classList.add("open-popup");
        }
        function closepopup(){
            popup.classList.remove("open-popup");
        }
    </script>
     <style>
.popup{
    width: 400px;
    background: #fff;
    border-radius: 6px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%,-50%) scale(0.1);
    text-align: center;
    padding: 0 30px 30px;
    color: #333;
    visibility: hidden;
    transition: transform 0.4s, top 0.4s;
}
.open-popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
}
.popup img{
    width: 100px;
    margin-top: -50px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}
.popup h2{
    font-size: 38px;
    font-weight: 500;
    margin: 30px 0 10px;
}
.popup button{
    width: 100%;
    margin-top: 50px;
    padding: 10px 0;
    background: #6fd649;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 5px 5px rgba(0,0,0,0.2);
}
    </style> 

    <script src="js/form.js"></script>
    
</body>
</html>

<?php 
    error_reporting(0);
    if($_POST["login"])
    {
        $e_mail  =  $_POST['email'];
        $pass    =  $_POST['password'];

        if($e_mail != "" && $pass != "")
        {

        $query = "INSERT INTO loginform values('$e_mail','$pass')";

        $data = mysqli_query($hhh,$query);

        if($data){
            echo"Yes";
        }
        else{
            echo "fail";
        }
    }
    else
    {
        echo "<script>alert('fill the form first')</script>" ;
    }

    }
?>


