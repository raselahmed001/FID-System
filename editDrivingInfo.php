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
  


  <title>Edit Driving Lisence</title>
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
    <h3 style="color:#FF0000 ;"class="some">Edit Driving Lisence</h3>
  </div>


  <!-- form section -->

  <div class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Lisence No :</label>
              <input type="text" class="form-control"placeholder="Lisence No" id="" name="Lisence_No"; ?>
            </div><br>
            
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="Search">Search Citizen</button>
        </div>

        </form>
        <?php
          include('includes/config.php');
          if(isset($_POST['Search']))
          {
            $Lisence_No=$_POST['Lisence_No'];

            $sql= "Select * FROM driving_lisence WHERE Lisence_No='$Lisence_No'";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            if($count==0) echo "<script>alert('Sorry, ID does not exist');</script>";
     
            while($row=mysqli_fetch_assoc($result))
            { ?>
              <form action=""method="POST">
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Lisence No :</label>
              <input type="text" class="form-control"placeholder="Lisence No" id="" name="Lisence_No" value="<?php echo $_POST["Lisence_No"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Name :</label>
              <input type="text" class="form-control"placeholder="Name" id="" name="Name" value="<?php echo $row["Name"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Present Address :</label>
              <input type="text" class="form-control"placeholder="Present Address" id="" name="Present_Address" value="<?php echo $row["Present_Address"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Permanent_Address :</label>
              <input type="text" class="form-control"placeholder="Permanent Address" id="" name="Permanent_Address" value="<?php echo $row["Permanent_Address"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Date of Birth :</label>
              <input type="date" class="form-control"placeholder="Date of birth" id="" name="Date_of_birth" value="<?php echo $row["Date_of_birth"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Blood Group :</label>
              <input type="text" class="form-control"placeholder="Blood Group" id="" name="Blood_group" value="<?php echo $row["Blood_group"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Lisence Validity :</label>
              <input type="date" class="form-control"placeholder="Validity" id="" name="Validity" value="<?php echo $row["Validity"]; ?>"required>
            </div>
            
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="update">Update Citizen</button>
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
error_reporting(0);

if (isset($_POST["update"])) {

  //getting the data
  $lisence_No = mysqli_real_escape_string($conn, $_POST["lisence_No"]);
  $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
  $Present_Address = mysqli_real_escape_string($conn, $_POST["Present_Address"]);
  $Permanent_Address = mysqli_real_escape_string($conn, $_POST["Permanent_Address"]);
  $Date_of_birth = mysqli_real_escape_string($conn, $_POST["Date_of_birth"]);
  $Blood_group = mysqli_real_escape_string($conn, $_POST["Blood_group"]);
  $Validity = mysqli_real_escape_string($conn, $_POST["Validity"]);


    $sql = "UPDATE `driving_lisence` SET `Lisence_No` = '$_POST[Lisence_No]', `Name` = '$_POST[Name]', `Present_Address` = '$_POST[Present_Address]',
     `Permanent_Address` = '$_POST[Permanent_Address]',`Date_of_birth` = '$_POST[Date_of_birth]',`Blood_group`='$_POST[Blood_group]',`Validity`='$_POST[Validity]'
     WHERE `driving_lisence`.`Lisence_No` = '$_POST[Lisence_No]'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["Lisence_No"] = "";
      $_POST["Name"] = "";
      $_POST["Present_Address"] = "";
      $_POST["Permanent_Address"] = "";
      $_POST["Date_of_birth"] = "";
      $_POST["Blood_group"] = "";
      $_POST["Validity"] = "";
      

      echo "<script>alert('Citizen Updated  Successfully ');</script>";
    } else {
      echo "<script>alert('Error, try again');</script>";
    }
  }

?>