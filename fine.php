<?php
include('includes/config.php');
session_start();
error_reporting(0);

if (isset($_POST["submit"])) {		

  //getting the data
  $Traffic_fine_no = mysqli_real_escape_string($conn, $_POST["Traffic_fine_no"]);
  $Issue_date = mysqli_real_escape_string($conn, $_POST["Issue_date"]);
  $Issued_by = mysqli_real_escape_string($conn, $_POST["Issued_by"]);
  $Due_date = mysqli_real_escape_string($conn, $_POST["Due_date"]);
  $Reason = mysqli_real_escape_string($conn, $_POST["Reason"]);
  $Amount_in_BDT = mysqli_real_escape_string($conn, $_POST["Amount_in_BDT"]);
  $Lisence_No = mysqli_real_escape_string($conn, $_POST["Lisence_No"]);


  //check the email
  $check = mysqli_num_rows(mysqli_query($conn, "SELECT Traffic_fine_no FROM fine WHERE Traffic_fine_no='$Traffic_fine_no'"));

  if ($check > 0) {
    echo "<script>alert('Data already Exists in out Database.');</script>";
  } else {
    $sql = "INSERT INTO `fine`(`Issue_date`,`Issued_by`, `Due_date`, `Reason`, `Amount_in_BDT`, `Lisence_No`) 
    VALUES ('$Issue_date','$Issued_by','$Due_date','$Reason','$Amount_in_BDT','$Lisence_No')";
    $result = mysqli_query($conn, $sql);
     }
     if($result)
     {
      $_Post["Issue_date"] = "";
      $_POST["Issued_By"] = "";
      $_Post["Due_date"] = "";
      $_Post["Reason"] = "";
      $_Post["Amount_in_BDT"] = "";
      $_Post["Lisence_No"] = "";

      echo "<script>alert('Citizen Fined  Successfully ');</script>";
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


  <title>Fine</title>
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
                Fine Citizen
                <br>
                <br>
            </h1>
        

        <div style="margin-top: auto;margin-left: 300px"; class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

          <div class="mb-3">
              <label for="exampleInput" class="form-label">Lisence_No :</label>
              <input type="text" class="form-control" placeholder="Lisence_No" id="" name="Lisence_No" value="<?php echo $_POST["Lisence_No"]; ?>" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Issue_date :</label>
              <input type="date" class="form-control"placeholder="Issue_date" id="" name="Issue_date" value="<?php echo $_POST["Issue_date"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Issued_by :</label>
              <input type="text" class="form-control"placeholder="Issued_by" id="" name="Issued_by" value="<?php echo $_POST["Issued_by"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Due_date :</label>
              <input type="date" class="form-control"placeholder="Due_date" id="" name="Due_date" value="<?php echo $_POST["Due_date"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Reason :</label>
              <input type="text" class="form-control"placeholder="Reason" id="" name="Reason" value="<?php echo $_POST["Reason"]; ?>"required>
            </div>
            <div class="mb-3">
              <label for="exampleInput" class="form-label">Amount_in_BDT :</label>
              <input type="text" class="form-control" placeholder="Amount_in_BDT" id="" name="Amount_in_BDT" value="<?php echo $_POST["Amount_in_BDT"]; ?>" required>
            </div>
            
            <br>
            
          
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="submit">Fine Citizen </button>
        </div>

        </form>
      </div>
    </div>
  </div>
  </div>

  
</body>

</html>