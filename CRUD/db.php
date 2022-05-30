<?php
$hostname="localhost";
$username="root";
$pass="";
$db="crudphp";

$attach=mysqli_connect($hostname,$username,$pass,$db);

if($attach==true)
{
    print "Connect DataBase<br>";
}
else
{
    echo "Not Connect";
}
?>