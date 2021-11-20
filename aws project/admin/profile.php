<?php
session_start();
$con = mysqli_connect('localhost','root','');
$tbl_name="usertable";
mysqli_select_db($con,"userregister") or die("cannot select db");
$sql="SELECT * FROM $tbl_name";
$result=$con->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "<font-size: 10px>";
        echo "name:" .$row["name"] ."-password :". $row["password"]. "<br/>";
    }
}
$con->close();
?>
<html>
    <head>
<style>
    body{
        background-color: gold;
        color: whitesmoke;
        font-size: 30px;
    }
    </style>
    </head>
    <body>

    </body>
</html>