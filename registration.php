<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
Registration Details
</title>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: rgb(121, 118, 255);
  color: white;
}
</style>
</head>
<link href="img/ita.png" rel="icon">
<body>
<?php

$sname = 'localhost';
$uname= 'gctitcom_admin';
$passwd = 'Gctcbe13.';
$dbname = 'gctitcom_technovate';

$con=new mysqli($sname,$uname,$passwd,$dbname);

if($con->connect_error)
{
 die("Connection failed:".$con->connect_error);
}
$sql="select * from registration";
$result = $con->query($sql);
?>
<h2 style="color:rgb(121, 118, 255);text-align:center;font-family:Courier;font-size:300%;">Registration Details<br><center><a href="user.html" class="main-btn" style="text-align:left;">Register</a></center>
</h2>
<table id="customers">
  <tr>
    <th>Unique ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Phone</th>
    <th>College</th>
    <th>Department</th>
    <th>Year of Study</th>

  </tr>
<?php
while($row = $result->fetch_row())
{  
  ?><tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[1]?></td>
    <td><?php echo $row[2]?></td>
    <td><?php echo $row[3]?></td>
    <td><?php echo $row[4]?></td>
    <td><?php echo $row[5]?></td>
    <td><?php echo $row[6]?></td>
    <td><?php echo $row[7]?></td>
    <td><?php echo $row[8]?></td>
  </tr>
  <?php
}
?>
</table>

</body>
<?php
$con->close();
?>
</html>
