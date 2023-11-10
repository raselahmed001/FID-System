<?php
include('includes/config.php');
session_start();
error_reporting(0);

if (isset($_POST["submit"])) {	


  //getting the data
  $lisence_No = mysqli_real_escape_string($conn, $_POST["lisence_No"]);
  $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
  $Present_Address = mysqli_real_escape_string($conn, $_POST["Present_Address"]);
  $Permanent_Address = mysqli_real_escape_string($conn, $_POST["Permanent_Address"]);
  $Date_of_birth = mysqli_real_escape_string($conn, $_POST["Date_of_birth"]);
  $Validity = mysqli_real_escape_string($conn, $_POST["Validity"]);
  $Blood_group = mysqli_real_escape_string($conn, $_POST["Blood_group"]);
  $NID_No = mysqli_real_escape_string($conn, $_POST["NID_No"]);
  $Passport_No = mysqli_real_escape_string($conn, $_POST["Passport_No"]);


  //check the email
  $check = mysqli_num_rows(mysqli_query($conn, "SELECT lisence_No FROM driving_lisence WHERE lisence_No='$lisence_No'"));

  if ($check > 0) {
    echo "<script>alert('Data already Exists in out Database.');</script>";
  } else {
    $sql = "INSERT INTO `driving_lisence`(`lisence_No`, `Name`, `Present_Address`, `Permanent_Address`, `Date_of_birth`,`Validity`,`Blood_group`,`NID_No`,`Passport_No`) 
    VALUES ('$lisence_No','$Name','$Present_Address','$Permanent_Address','$Date_of_birth','$Validity','$Blood_group','$NID_No','$Passport_No')";
    $result = mysqli_query($conn, $sql);
     }
     if($result)
     {
      $_Post["lisence_No"] = "";
      $_Post["Name"] = "";
      $_Post["Present_Address"] = "";
      $_Post["Permanent_Address"] = "";
      $_Post["Date_of_birth"] = "";
      $_Post["Validity"] = "";
      $_Post["Blood_group"] = "";
      $_Post["NID_No"] = "";
      $_Post["Passport_No"] = "";

      echo "<script>alert('Citizen Added  Successfully ');</script>";
    } else {
      echo "<script>alert('Error, try again');</script>";
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

  <title>ADD Citizen Driving Lisence</title>
</head>

<body style="background-color:lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FID System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHome.php ">Home</a></li>
      <li ><a href="CitizenList.php">Citizen List</a></li>
     
      <li><a href="SearchAcitizen.php">Search A Citizen</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
    
  </div>
</nav>
  <hr>
  <div class="beadonor">
    <h3 style="color:#FF0000 ;" class="some">Add Citizen Driving Lisence</h3>
  </div>


  <!-- form section -->

  <div style="margin-top: auto;margin-left: 300px"; class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Lisence No :</label>
              <input type="text" class="form-control"placeholder="Lisence No" id="" name="lisence_No" value="<?php echo $_POST["lisence_No"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Name :</label>
              <input type="text" class="form-control"placeholder="Name" id="" name="Name" value="<?php echo $_POST["Name"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Present Address :</label>
              <input type="text" class="form-control"placeholder="Present Address" id="" name="Present_Address" value="<?php echo $_POST["Present_Address"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Permanent Address :</label>
              <input type="text" class="form-control"placeholder="Permanent Address" id="" name="Permanent_Address" value="<?php echo $_POST["Permanent_Address"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInput" class="form-label">Date of Birth :</label>
              <input type="date" class="form-control" placeholder="Date of Birth" id="" name="Date_of_birth" value="<?php echo $_POST["Date_of_birth"]; ?>" required>
            </div>
            <div class="mb-3">
              <label for="exampleInput" class="form-label">Valid till :</label>
              <input type="date" class="form-control" placeholder="Validity" id="" name="Validity" value="<?php echo $_POST["Validity"]; ?>" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Blood Group :</label>
              <input type="text" class="form-control"placeholder="Blood group" id="" name="Blood_group" value="<?php echo $_POST["Blood_group"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">NID No :</label>
              <input type="text" class="form-control"placeholder="NID No" id="" name="NID_No" value="<?php echo $_POST["NID_No"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Passport No :</label>
              <input type="text" class="form-control"placeholder="Passport_No" id="" name="Passport_No" value="<?php echo $_POST["Passport_No"]; ?>"required>
            </div>
            <br>
          
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="submit">ADD Citizen </button>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>

  
</body>

</html>