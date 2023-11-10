<?php
include('includes/config.php');
session_start();
error_reporting(0);


if (isset($_POST["search"])) {

  //getting the data
  $Passport_No = mysqli_real_escape_string($conn, $_POST["Passport_No"]);
     $sql = "Select * FROM driving_lisence WHERE Passport_No='$Passport_No' ";
     $result=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($result);
            if($count==0) echo "<script>alert('Sorry, ID does not exist');</script>";
     
     while($row=mysqli_fetch_assoc($result))
         { ?>
            <form action=""method="POST">
            <table>
  <tr>
    <th>Lisence No</th>
    <th>Name</th>
    <th>Present Address</th>
    <th>Permanent Address</th>
    <th>Date of Birth</th>
    <th>Blood Group</th>
    <th>Lisence Validity</th>
    <th>NID No</th>
    <th>Passport_No</th>
  </tr>
  <tr>
    <td><input type="text"name="Lisence_No"value="<?php echo $row['Lisence_No']?>"/></td>
    <td><input type="text"name="Name"value="<?php echo $row['Name']?>"/></td>
    <td><input type="text"name="Present_Address"value="<?php echo $row['Present_Address']?>"/></td>
    <td><input type="text"name="Permanent_Address"value="<?php echo $row['Permanent_Address']?>"/></td>
    <td><input type="text"name="Date_of_birth"value="<?php echo $row['Date_of_birth']?>"/></td>
    <td><input type="text"name="Blood_group"value="<?php echo $row['Blood_group']?>"/></td>
    <td><input type="text"name="Validity"value="<?php echo $row['Validity']?>"/></td>
    <td><input type="text"name="NID_No"value="<?php echo $row['NID_No']?>"/></td>
    <td><input type="text"name="Passport_No"value="<?php echo $row['Passport_No']?>"/></td>
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


  <title>Citizen Information</title>
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
                Citizen Information
                <br>
                <br>
            </h1>
            <div class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Citizen Passport No :</label>
              <input type="text" class="form-control"placeholder="Enter Passport No" id="" name="Passport_No" value="<?php echo $_POST["Passport_No"]; ?>"required>
            </div><br>
          
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="search">Search Citizen</button>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>