<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "resumedata";

$con = mysqli_connect($servername,$username,$password,$databasename,4308);

if($con)
{
     //echo "<script>alert('Connection Succed..')</script>";
}
else
{
    echo "Connection Failed..".mysqli_connect_error();
}
?>