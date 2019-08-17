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
$sql = "INSERT INTO qwerty()
VALUES ('')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>