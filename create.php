<?php
$servername = "localhost"
$username = "username"
$passsword = "password"
$dbname = "mydb"

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
  die("Connection not Established".$conn->connect_error);
}
 CREATE TABLE qwerty("PhNO" VARCHAR(12) PRIMARY KEY,"Fname" VARCHAR(250),"Lname" VARCHAR(250),"Age" INT,"LNo" VARCHAR(15) ,"Password" VARCHAR(20));
$conn->close();
?>