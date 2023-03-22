<html>
    <head>
        <title>Register Form Data</title>
        <style>
            body {
                background: #ddd;
            }
            table{
                background-color: aliceblue;
                text-align: center;
                border: 2px solid black;
            }
            h2{
                border-bottom: 1px solid black wi;
                text-transform: capitalize;
                text-align: center;
                font-size: 40px;
                font-weight: 300;
            }
        </style>
    </head>
</html>
<?php

include("co.php");
error_reporting(0);

$query = "SELECT * FROM signupform";

$data = mysqli_query($hhh ,$query);

$total = mysqli_num_rows($data);


if($total != 0)
{
    ?>

    <h2 align="center"><mark> Desplaying All Records </mark></h2>
<center>
    <table border="2px" cellspacing="8" width="50%">
        <tr>
            <th width="20%">Name</th>
            <th width="30%">E-Mail</th>
            <th width="20%">Password</th>
            
        </tr>

    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo " <tr>
            <td>".$result['Name']."</td>
            <td>".$result['E-Mail']."</td>
            <td>".$result['Password']."</td>
        </tr>
        ";
    }
}
else
{
    echo "No records Found";
}

?>
</table>
</center>