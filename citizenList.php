<!DOCTYPE html>
<html lang="en">
<head>
  <title>Citizen List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:lightblue;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FID System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHome.php">Home</a></li>
      <li><a href="CitizenList.php">Citizen List</a></li>
     
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
    <h3 style="color: red"; class="some">Citizen List</h3>
  </div>


  
</body>

</html>

<?php
include('includes/config.php');
session_start();
error_reporting(0);

     $sql = "Select * FROM driving_lisence";
     $result=mysqli_query($conn,$sql);
     
     
     ?>   <form >
            <table >
  <tr >
    <th>NID No</th>
    <th>Passport No</th>
    <th>Lisence No</th>
    <th>Name</th>
    <th>Date of Birth</th>
    <th>Blood Group</th>
    <th>Validity</th>
  </tr>
  <br>
  <?php
  while($row=mysqli_fetch_assoc($result))
         { ?>
   <tr>
    <td><input name="NID_No"value="<?php echo $row['NID_No']?>"/></td>
    <td><input name="Passport_No"value="<?php echo $row['Passport_No']?>"/></td>
    <td><input name="lisence_No"value="<?php echo $row['Lisence_No']?>"/></td>
    <td><input name="Name"value="<?php echo $row['Name']?>"/></td>
    <td><input name="Date_of_birth"value="<?php echo $row['Date_of_birth']?>"/></td>
    <td><input name="Blood_group"value="<?php echo $row['Blood_group']?>"/></td>
    <td><input name="Validity"value="<?php echo $row['Validity']?>"/></td>
   </tr>
         </table>
            </form>
            <?php
         }

?>




