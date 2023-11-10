<?php
include('includes/config.php');
session_start();
error_reporting(0);

if (isset($_POST["submit"])) {

  //getting the data
  $Number_plate = mysqli_real_escape_string($conn, $_POST["Number_plate"]);
  $Type = mysqli_real_escape_string($conn, $_POST["Type"]);
  $Registration_no = mysqli_real_escape_string($conn, $_POST["Registration_no"]);
  $Chassis_no = mysqli_real_escape_string($conn, $_POST["Chassis_no"]);
  $Date_bought = mysqli_real_escape_string($conn, $_POST["Date_bought"]);
  $Engine_no = mysqli_real_escape_string($conn, $_POST["Engine_no"]);
  $Registration_validity = mysqli_real_escape_string($conn, $_POST["Registration_validity"]);
  $PUC_status = mysqli_real_escape_string($conn, $_POST["PUC_status"]);
  $Insurance_validity = mysqli_real_escape_string($conn, $_POST["Insurance_validity"]);
  $Lisence_No = mysqli_real_escape_string($conn, $_POST["Lisence_No"]);
  

  $check = mysqli_num_rows(mysqli_query($conn, "SELECT Number_plate FROM vehicles WHERE Number_plate='$Number_plate'"));
  
   if ($check > 0) {
    echo "<script>alert('Number_plate already Exists in out Database.');</script>";
  } 
  else {
    $sql = "INSERT INTO `vehicles`(`Number_plate`, `Type`, `Registration_no`, `Chassis_no`, `Date_bought`, `Engine_no`,`Registration_validity`,
    `PUC_status`,`Insurance_validity`,`Lisence_No`) 

    VALUES ('$Number_plate','$Type','$Registration_no','$Chassis_no','$Date_bought','$Engine_no','$Registration_validity','$PUC_status',
    '$Insurance_validity','$Lisence_No')"; 
    

    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["Number_plate"] = "";
      $_POST["Type"] = "";
      $_POST["Registration_no"] = "";
      $_POST["Chassis_no"] = "";
      $_POST["Date_bought"] = "";
      $_POST["Engine_no"] = "";
      $_POST["Registration_validity"] = "";
      $_POST["PUC_status"] = "";
      $_POST["Insurance_validity"] = "";
      $_POST["Lisence_No"] = "";
     

      echo "<script>alert('vehicle Added  Successfully ');</script>";
    } else {
      echo "<script>alert('Error, try again');</script>";
      die(mysqli_error($conn)); 
    
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


  <title>Add Vehicle</title>
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

  <!-- add user section -->
  <hr>
  <div class="beadonor">
    <h3 style="color:#FF0000 ;" class="some">Add Vehicle Information</h3>
  </div>


  <!-- form section -->

  <div  style="margin-top: auto;margin-left: 300px"class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

            
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Number_plate :</label>
              <input type="text" class="form-control"id="" name="Number_plate" value="<?php echo $_POST["Number_plate"]; ?>" >
            </div>
            <br>
            

            <label for="Type">Type :</label>
            <select name="Type" id="Type" class="form-control" value="<?php echo $_POST["Type"]; ?>" required>
            <option value="Car">Car</option>
                <option value="Bus">Bus</option>
                <option value="Truck">Truck</option>
                <option value="Bike">Bike</option>
                <option value="CNG">CNG</option>
             </select>
             <br>
             

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Registration_no :</label>
              <input type="text" class="form-control"id="" name="Registration_no" value="<?php echo $_POST["Registration_no"]; ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Chassis_no :</label>
              <input type="text" class="form-control" id="" name="Chassis_no" value="<?php echo $_POST["Chassis_no"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Date_bought :</label>
              <input type="date" class="form-control" id="" name="Date_bought" value="<?php echo $_POST["Date_bought"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInput" class="form-label">Engine_no :</label>
              <input type="text" class="form-control" id="" name="Engine_no" value="<?php echo $_POST["Engine_no"]; ?>">
            </div>

            <div class="mb-3">
              <label for="exampleInput" class="form-label">Registration_validity :</label>
              <input type="date" class="form-control"  id="" name="Registration_validity" value="<?php echo $_POST["Registration_validity"]; ?>">
            </div>

            <div class="mb-3">
              <label for="exampleInput" class="form-label">PUC_status :</label>
              <input type="text" class="form-control"  id="" name="PUC_status" value="<?php echo $_POST["PUC_status"]; ?>" required>
            </div>

            <div class="mb-3">
              <label for="exampleInput" class="form-label">Insurance_validity :</label>
              <input type="date" class="form-control"  id="" name="Insurance_validity" value="<?php echo $_POST["Insurance_validity"]; ?>" required>
            </div>
            <div class="mb-3">
              <label for="exampleInput" class="form-label">Lisence No :</label>
              <input type="text" class="form-control"  id="" name="Lisence_No" placeholder="Enter vehicle owner lisence no" value="<?php echo $_POST["Lisence_No"]; ?>" required>
            </div>
            <br>
            
            <div class="form-group form">
            <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="submit">Add Vehicle </button>
            </div>

        </form>
      </div>
    </div>
  </div>
  </div>

  
</body>

</html>