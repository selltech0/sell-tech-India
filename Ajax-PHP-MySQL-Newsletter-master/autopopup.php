<?php include('inc/Database.class.php');
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajax Newsletter Form</title>
        <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <div class="popup">
        <div class="popup-content">
        <div id="newsletterform" >
            <div class="wrap">
                <h3>Get Email Update</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper sapien luctus nisl laoreet, ac commodo tellus placerat. Etiam nec magna lacus. Curabitur quis felis vel nisl tincidunt hendrerit.</p>
                <form action="send.php" method="post" id="newsletter" name="newsletter">
                    <input type="email" name="signup-email" id="signup-email" value="" placeholder="Insert email here" />
                    <input type="submit" value="Subscribe" name="signup-button" id="signup-button">
                    <button id="close-btn">X</button>
                    <span class="arrow"></span>
                </form>
                <div id="response"></div>
            </div>
        </div>
        </div>
    </div>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/js/lib.js"></script>
    </body>
</html>