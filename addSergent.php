<?php
include('includes/config.php');
session_start();
error_reporting(0);

if (isset($_POST["submit"])) {

  //getting the data
  $User_Name = mysqli_real_escape_string($conn, $_POST["User_Name"]);
  $Password = mysqli_real_escape_string($conn, $_POST["Password"]);
  $Designation = mysqli_real_escape_string($conn, $_POST["Designation"]);
  $Posting = mysqli_real_escape_string($conn, $_POST["Posting"]);
  $Email = mysqli_real_escape_string($conn, $_POST["Email"]);
  $Contact_No = mysqli_real_escape_string($conn, $_POST["Contact_No"]);
  $Pass=md5($Password);
  


  //check the email
  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT Email FROM user1 WHERE Email='$Email'"));

  if ($check_email > 0) {
    echo "<script>alert('Email already Exists in out Database.');</script>";
  } else {
    $sql = "INSERT INTO `user1`(`User_name`, `Password`, `Designation`, `Posting`, `Email`, `Contact_No`) 
    VALUES ('$User_Name','$Pass','$Designation','$Posting','$Email','$Contact_No')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["User_Name"] = "";
      $_POST["Pass"] = "";
      $_POST["Designation"] = "";
      $_POST["Posting"] = "";
      $_POST["Email"] = "";
      $_POST["Contact_No"] = "";
     

      echo "<script>alert('User Added  Successfully ');</script>";
    } else {
      echo "<script>alert('Error, try again');</script>";
    }
  }
}

?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title >ADD Sergent</title>
 
</head>



<body style="background-color:lightblue;">
  

  <!--navbar section-->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FID System</a>
    </div>
    <ul class="nav navbar-nav">
      <li  class="active"><a href="AdminHome.php">Home</a></li>
      <li><a href="SergentList.php">Traffic Sergent List</a></li>
     
      <li><a href="SearchAsergent.php">Search A Sergent</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
    
  </div>
</nav>
       
  <hr>
  <div class="beadonor">
    <h3 style="color: red;" class="some">Add Sergent</h3>
  </div>


  <!-- form section -->

  <div style="margin-top: auto;margin-left: 300px"; class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">User Name :</label>
              <input type="text" class="form-control"placeholder="User Name" id="" name="User Name" value="<?php echo $_POST["User Name"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password :</label>
              <input type="text" class="form-control"placeholder="Password" id="" name="Password" value="<?php echo $_POST["Password"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Designation :</label>
              <input type="text" class="form-control"placeholder="Designation" id="" name="Designation" value="<?php echo $_POST["Designation"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Posting :</label>
              <input type="text" class="form-control"placeholder="Posting" id="" name="Posting" value="<?php echo $_POST["Posting"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInput" class="form-label">Email :</label>
              <input type="email" class="form-control" placeholder="Email" id="" name="Email" value="<?php echo $_POST["Email"]; ?>" required>
            </div>

            <div class="mb-3">
              <label for="exampleInput" class="form-label">Contact No :</label>
              <input type="text" class="form-control" placeholder="Contact No" id="" name="Contact_No" value="<?php echo $_POST["Contact_No"]; ?>" required>
            </div><br>
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="submit">ADD Sergent </button>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>

  
</body>

</html>
