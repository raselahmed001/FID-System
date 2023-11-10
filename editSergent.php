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


  <title>Edit Sergent</title>
</head>

<body style="background-color:lightblue;">
  

  <!--navbar section-->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FID System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHome.php">Home</a></li>
      <li ><a href="SergentList.php">Traffic Sergent Listt</a></li>
     
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
    <h3 style="color: red;" class="some">Edit Sergent</h3>
  </div>


  <!-- form section -->

  <div class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">User ID :</label>
              <input type="text" class="form-control"placeholder="User ID" id="" name="User_ID"; ?>
            </div>
            <br>
            
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="Search">Search Sergent</button>
        </div>

        </form>
        <?php
          include('includes/config.php');
          if(isset($_POST['Search']))
          {
            $User_ID=$_POST['User_ID'];

            $sql= "Select * FROM user1 WHERE User_ID='$User_ID'";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            if($count==0) echo "<script>alert('Sorry, ID does not exist');</script>";
     
            while($row=mysqli_fetch_assoc($result))
            { ?>
              <form action=""method="POST">
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">User ID :</label>
              <input type="text" class="form-control"placeholder="User ID" id="" name="User_ID" value="<?php echo $row["User_ID"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">User Name :</label>
              <input type="text" class="form-control"placeholder="User_name" id="" name="User_name" value="<?php echo $row["User_name"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password :</label>
              <input type="text" class="form-control"placeholder="Password" id="" name="Password" value="<?php echo $row["Password"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Designation :</label>
              <input type="text" class="form-control"placeholder="Designation" id="" name="Designation" value="<?php echo $row["Designation"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Posting :</label>
              <input type="text" class="form-control"placeholder="Posting" id="" name="Posting" value="<?php echo $row["Posting"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInput" class="form-label">Email :</label>
              <input type="email" class="form-control" placeholder="Email" id="" name="Email" value="<?php echo $row["Email"]; ?>" required>
            </div>

            <div class="mb-3">
              <label for="exampleInput" class="form-label">Contact No :</label>
              <input type="text" class="form-control" placeholder="Contact No" id="" name="Contact_No" value="<?php echo $row["Contact_No"]; ?>" required>
            </div>
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="update">Update Sergent</button>
        </div>
    
              </form>
              <?php
           }
          }
        ?>
        
      </div>
    </div>
  </div>
  </div>

  
</body>

</html>
<?php
include('includes/config.php');
session_start();
error_reporting(0);

if (isset($_POST["update"])) {

  //getting the data
  $User_ID = mysqli_real_escape_string($conn, $_POST["User_ID"]);
  $User_name = mysqli_real_escape_string($conn, $_POST["User_name"]);
  $Password = mysqli_real_escape_string($conn, $_POST["Password"]);
  $Designation = mysqli_real_escape_string($conn, $_POST["Designation"]);
  $Posting = mysqli_real_escape_string($conn, $_POST["Posting"]);
  $Email = mysqli_real_escape_string($conn, $_POST["Email"]);
  $Contact_No = mysqli_real_escape_string($conn, $_POST["Contact_No"]);
  $Pass=md5($Password);
  


    $sql = "UPDATE `user1` SET `User_ID` = '$_POST[User_ID]', `User_name` = '$_POST[User_name]', `Password` = '$Pass',
     `Designation` = '$_POST[Designation]',`Posting` = '$_POST[Posting]', `Email` = '$_POST[Email]', `Contact_No` = '$_POST[Contact_No]' 
     WHERE `user1`.`User_ID` = '$_POST[User_ID]'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["User_ID"] = "";
      $_POST["User_name"] = "";
      $_POST["Pass"] = "";
      $_POST["Designation"] = "";
      $_POST["Posting"] = "";
      $_POST["Email"] = "";
      $_POST["Contact_No"] = "";
     

      echo "<script>alert('User Updated  Successfully ');</script>";
    } else {
      echo "<script>alert('Error, try again');</script>";
    }
  }

?>