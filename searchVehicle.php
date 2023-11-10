<?php
include('includes/config.php');
session_start();
error_reporting(0);


if (isset($_POST["search"])) {

  //getting the data
  $Number_plate = mysqli_real_escape_string($conn, $_POST["Number_plate"]);
     $sql = "Select * FROM vehicles WHERE Number_plate='$Number_plate' ";
     $result=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($result);
            if($count==0) echo "<script>alert('Sorry, ID does not exist');</script>";
     
     while($row=mysqli_fetch_assoc($result))
         { ?>
            <form action=""method="POST">
            <table>
  <tr>
    <th>Number Plate</th>
    <th>Type</th>
    <th>Registration No</th>
    <th>Chassis No</th>
    <th>Engine No</th>
    <th>Date Bought</th>
    <th>Registration Validity</th>
    <th>PUC Status</th>
    <th>Insurance Validity</th>
    <th>Owner Lisence No</th>
  </tr>
  <tr>
    <td><input type="text"name="Number_plate"value="<?php echo $row['Number_plate']?>"/></td>
    <td><input type="text"name="Type"value="<?php echo $row['Type']?>"/></td>
    <td><input type="text"name="Registration_no"value="<?php echo $row['Registration_no']?>"/></td>
    <td><input type="text"name="Chassis_no"value="<?php echo $row['Chassis_no']?>"/></td>
    <td><input type="text"name="Engine_no"value="<?php echo $row['Engine_no']?>"/></td>
    <td><input type="text"name="Date_bought"value="<?php echo $row['Date_bought']?>"/></td>
    <td><input type="text"name="Registration_validity"value="<?php echo $row['Registration_validity']?>"/></td>
    <td><input type="text"name="PUC_status"value="<?php echo $row['PUC_status']?>"/></td>
    <td><input type="text"name="Insurance_validity"value="<?php echo $row['Insurance_validity']?>"/></td>
    <td><input type="text"name="Lisence_No"value="<?php echo $row['Lisence_No']?>"/></td>
   </tr>
            </form>
            <?php
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


  <title>Vehicle Information</title>
</head>

<body style="background-color:lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FID System</a>
    </div>
    

    <ul class="nav navbar-nav">
      <li class="active"><a href="SergentHome.php">Home</a></li>
    </ul>
       


    <ul class="nav navbar-nav navbar-right">
      <li><a href="contact.php"><span class="glyphicon glyphicon-user"></span> Contact Admin</a></li>
      <li><a href="logoutsergent.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>



    
  </div>


</nav> 
<h1 style="color:#FF0000 ;">
                Vehicle Information
                <br>
                <br>
            </h1>
            <div class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Number Plate :</label>
              <input type="text" class="form-control"placeholder="Enter Number Plate" id="" name="Number_plate" value="<?php echo $_POST["Number_plate"]; ?>"required>
            </div><br>
          
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="search">Search Vehicle</button>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>