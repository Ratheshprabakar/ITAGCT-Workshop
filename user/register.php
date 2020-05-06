<?php

if (!empty($_POST)) {
$servername = "localhost";
$username = "root";
$passworddb = "";
$dbname = "sandbox";

$org =$desgination="";
// Create connection
$conn = new mysqli($servername, $username, $passworddb,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

    

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$mobile=$_POST["phone"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
$country=$_POST["country"];
$pincode=$_POST["pincode"];
$profession=$_POST["profession"];
$org=$_POST["org"];
$des=$_POST["des"];
$yrsofexp=$_POST["yrsofexp"];
$ins=$_POST["ins"];
$degree=$_POST["degree"];
$dep=$_POST["dep"];
$yrstu=$_POST["yrstu"];
//researcher
$ins1=$_POST["ins1"];
$des1=$_POST["des1"];
$dep1=$_POST["dep1"];
$yrstu1=$_POST["yrstu1"];



$sql = "insert into register(Email,First_name,Last_name,Mobile_number,Gender,DoB,Profession,Organisation,Designation,Years_of_experience,Address,City,State,Country,Pincode,Institution,Degree,Department,Year_of_study,InsR,DegR,DeptR,YrStuR) values('$email','$fname','$lname','$mobile','$gender','$dob','$profession','$org','$des','$yrsofexp','$address',
'$city','$state','$country','$pincode','$ins','$degree','$dep','$yrstu','$ins1','$des1','$dep1','$yrstu1')";
    
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} 
else{
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>