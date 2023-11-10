<?php

include('includes/config.php');

session_start();

error_reporting(0);


// login section
if (isset($_POST["login"])) {

    //getting the data
    $email = mysqli_real_escape_string($conn, $_POST["ID"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    //$password=md5($password);


    //check the email
    $check_ID = mysqli_query($conn, "SELECT ID FROM adminreg WHERE ID='$ID' &&  password='$password'");
    if (mysqli_num_rows($check_ID) > 0) {
        $row = mysqli_fetch_assoc($check_email);
        $_SESSION["ID"] = $row["ID"];
        header("Location: AdminHome.php");
    } else {
        echo "<script>alert('Login details is Incorrect. Please try again');</script>";
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


  <title>Sergent Home</title>
</head>

<body style="background-color:lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FID System</a>
    </div>
    

    <ul class="nav navbar-nav">
      <li class="active"><a href="SergentHome.php">Home</a></li>
      <li class="active"><a href="fineHistory.php">Fine History of a Citizen</a></li>
    </ul>
       


    <ul class="nav navbar-nav navbar-right">
      <li><a href="contact.php"><span class="glyphicon glyphicon-user"></span> Contact Admin</a></li>
      <li><a href="logoutsergent.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>



    
  </div>


</nav>
         <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"> Sergent Dashboard </h1>
                    
                       
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Total  Owners</div>
                                <?php
                                $sql = "SELECT * FROM `driving_lisence`";
                                $result = mysqli_query($conn, $sql);
                                if ($usercar = mysqli_num_rows($result)) {
                                    echo '<h4 style="text-align:center; class="mb_0" >' . $usercar . '</h4>';
                                } else
                                    echo '<h4 class="mb_0" >No Data</h4>'
                                ?>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#"></a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Total Vechicles</div>
                                <?php
                                $sql = "SELECT * FROM `vehicles`";;
                                $result = mysqli_query($conn, $sql);
                                if ($usercar = mysqli_num_rows($result)) {
                                    echo '<h4 style="text-align:center; class="mb_0" >' . $usercar . '</h4>';
                                } else
                                    echo '<h4 class="mb_0" >No Data</h4>'
                                ?>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#"></a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        
                     
                    </div>



                           
                     


            <h1 style="color:#FF0000 ;">
                Sergent Home
                <br>
                <br>
            </h1>
            <li style="font-size: 20px;
            background-color: #00008B; 
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;">
            <a style="color:aliceblue;"href="searchBy.php">Search Citizen</a></li>
            <br>
            <br>
            <li
            style="font-size: 20px;
            background-color: #00008B; 
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;">
            <a style="color:aliceblue;" href="searchVehicle.php">Search Vechicle</a></li>
            <br>
            <br>
            <li
            style="font-size: 20px;
            background-color: #00008B; 
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;">
            <a style="color:aliceblue;" href="fine.php">Fine</a></li>


  
</body>

</html>