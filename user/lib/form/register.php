<?php

if (!empty($_POST)) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sandbox";

$org =$desgination="";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
   
$org=$_POST["org"];
$designation=$_POST["designation"];


$sql = "insert into register(Organisation,Designation) values('$org','$designation')";
    
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} 
else{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>