<?php
include('includes/config.php');
session_start();
error_reporting(0);


if (isset($_POST["search"])) {

  //getting the data
  $User_ID = mysqli_real_escape_string($conn, $_POST["User_ID"]);
     $sql = "Select * FROM user1 WHERE User_ID='$User_ID' ";
     $result=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($result);
            if($count==0) echo "<script>alert('Sorry, ID does not exist');</script>";
     
     while($row=mysqli_fetch_assoc($result))
         { ?>
            <form action=""method="POST">
            <table>
  <tr>
    <th>User ID</th>
    <th>User Name</th>
    <th>Password</th>
    <th>Designation</th>
    <th>Posting</th>
    <th>Email</th>
    <th>Contact No</th>
  </tr>
  <tr>
    <td><input type="text"name="User_ID"value="<?php echo $row['User_ID']?>"/></td>
    <td><input type="text"name="User_name"value="<?php echo $row['User_name']?>"/></td>
    <td><input type="text"name="Password"value="<?php echo $row['Password']?>"/></td>
    <td><input type="text"name="Designation"value="<?php echo $row['Designation']?>"/></td>
    <td><input type="text"name="Posting"value="<?php echo $row['Posting']?>"/></td>
    <td><input type="text"name="Email"value="<?php echo $row['Email']?>"/></td>
    <td><input type="text"name="Contact_No"value="<?php echo $row['Contact_No']?>"/></td>
   </tr>
            </form>
            <?php
         }
     
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Sergent</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   
  </style>
</head>
<body style="background-color:lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FID System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHome.php">Home</a></li>
      <li><a href="SergentList.php">Traffic Sergent List</a></li>
     
      <li><a href="SearchAsergent.php">Search A Sergent</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
    
  </div>
</nav>

  <!-- add user section -->
  <hr>
  <div class="beadonor">
    <h3 style="color:red;" class="some">Search A Sergent</h3>
  </div>


  <!-- form section -->

  <div class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Sergent ID :</label>
              <input type="text" class="form-control"placeholder="Enter ID to search" id="" name="User_ID" value="<?php echo $_POST["User_ID"]; ?>"required>
            </div><br>
          
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="search">Search User</button>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>

  
</body>

</html>





