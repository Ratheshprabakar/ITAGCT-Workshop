     
<?php
$sname = 'localhost';
$uname= 'gctitcom_admin';
$passwd = 'Gctcbe13.';
$dbname = 'gctitcom_technovate';
$conn=new mysqli($sname,$uname,$passwd,$dbname);
if($conn->connect_error)
{
 die("Connection failed:".$conn->connect_error);
}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$college=$_POST['college'];
$department=$_POST['department'];
$year_of_study=$_POST['year_of_study'];
$select = mysqli_query($conn, "SELECT `email` FROM `registration` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
  echo '<script type="text/javascript">

          window.onload = function () { alert("Email ID already registered"); window.location = "user.html" }

</script>';
}
else{
  $sql = "INSERT INTO `registration`(`firstname`, `lastname`, `gender`, `email`, `phone`,`college`, `department`, `year_of_study`) VALUES ('$firstname','$lastname','$gender','$email','$phone','$college','$department','$year_of_study')";
  if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id; }
    ?>
    <html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Registration Successful</title>
  <link href="img/ita.png" rel="icon">
  
  <style>
    body{
      background-color:lightgray;
      background-image: url('img/gal6.jpg');
    }
  </style>
</head>
<body>
  
<div class="container">
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Successful</h4>
        </div>
        <div class="modal-body">
          <p>Thank you!!. <strong><?php echo $firstname;?></strong></p>
          <p>Successfully registered</p>
          <p>Your Unique ID : <strong><?php echo $last_id;?></strong></p><p style="color:red;">(Please note your Unique ID.)</p>
          <p>Further details will be send to your email shortly.</p>
          <b style="color:red;"><h5 ><b>Registration fee have to be paid at venue.</b></h5></b>
          <br>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><a href="user.html" class="main-btn">Home</a></button>
      </div>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>

    
<?php
$conn->close();
  }   
?>

