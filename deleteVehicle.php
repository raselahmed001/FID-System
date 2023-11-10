<?php
include('includes/config.php');
session_start();
error_reporting(0);


if (isset($_POST["submit"])) {

  //getting the data
  $Number_plate = mysqli_real_escape_string($conn, $_POST["Number_plate"]);
  $sql1= "Select * FROM vehicles WHERE Number_plate ='$Number_plate'";
  $result1=mysqli_query($conn,$sql1);
  $count=mysqli_num_rows($result1);
  if($count==0) echo "<script>alert('Sorry, ID does not exist');</script>";
  else{
     $sql = "DELETE FROM vehicles WHERE Number_plate='$Number_plate' ";
     $result=mysqli_query($conn,$sql);
     if($result){

      echo "<script>alert('Number plate Deleted  Successfully ');</script>";
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
  <title>Delete Vehicle</title>
</head>

<body style="background-color:lightblue;">
  

  <!--navbar section-->
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

  <!-- add user section -->
  <hr>
  <div class="beadonor">
    <h3 style="color: red;" class="some">Delete Vehicle</h3>
  </div>


  <!-- form section -->

  <div class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Number Plate :</label>
              <input type="text" class="form-control"placeholder="Number Plate" id="" name="Number_plate" value="<?php echo $_POST["Number_plate"]; ?>"required>
            </div><br>
            
          
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="submit">Delete Vehicle</button>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>

  
</body>

</html>