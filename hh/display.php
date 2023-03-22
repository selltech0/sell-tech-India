<html>
    <head>
        <title>Login Form Data</title>
        <style>
            body {
                background: #9ed4ef8f;
            }
            table{
                
                border: 2px solid black;
                background-color: aliceblue;
                text-align: center;
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

$query = "SELECT * FROM loginform";

$data = mysqli_query($hhh ,$query);

$total = mysqli_num_rows($data);


if($total != 0)
{
    ?>

<h2 ><mark> Desplaying All Records </mark></h2>
<center>
    <table border="2px" cellspacing="8" width="50%">
        <tr>
            <th width="30%">E_Mail</th>
            <th width="20%">Password</th>
        </tr>

    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo " <tr>
            <td>".$result['E_Mail']."</td>
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