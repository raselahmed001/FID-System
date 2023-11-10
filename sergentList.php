<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sergent List</title>
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
    <h3 style="color: red"; class="some">Sergent List</h3>
  </div>


  
</body>

</html>

<?php
include('includes/config.php');
session_start();
error_reporting(0);

     $sql = "Select * FROM user1";
     $result=mysqli_query($conn,$sql);
     
     
     ?>   <form >
            <table >
  <tr >
    <th>User ID</th>
    <th>User Name</th>
    <th>Password</th>
    <th>Designation</th>
    <th>Posting</th>
    <th>Email</th>
    <th>Contact No</th>
  </tr>
  <?php
  while($row=mysqli_fetch_assoc($result))
         { ?>
  <tr>
    <td ><input type="text"name="User_ID"value="<?php echo $row['User_ID']?>"/></td>
    <td><input type="text"name="User_name"value="<?php echo $row['User_name']?>"/></td>
    <td><input type="text"name="Password"value="<?php echo $row['Password']?>"/></td>
    <td><input type="text"name="Designation"value="<?php echo $row['Designation']?>"/></td>
    <td><input type="text"name="Posting"value="<?php echo $row['Posting']?>"/></td>
    <td><input type="text"name="Email"value="<?php echo $row['Email']?>"/></td>
    <td><input type="text"name="Contact_No"value="<?php echo $row['Contact_No']?>"/></td>
   </tr>
         </table>
            </form>
            <?php
         }

?>




