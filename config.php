<?php
$username="root";
$password="";
$host="localhost";
$database="admin";
  
   $con=mysqli_connect("$host","$username","$password") or die("Server Error");
mysql_select_db("$database") or die("Database error");

if($con==true)
{
    echo "Success";
}
else
{
    mysql_close($con);
}
?>