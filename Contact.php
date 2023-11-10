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
                    <h1 class="mt-4"> Admin Info </h1>


  
</body>

</html>

<?php
include('includes/config.php');
session_start();
error_reporting(0);

     $sql = "Select FULLNAME,contact_no,email FROM adminreg";
     $result=mysqli_query($conn,$sql);
     
     
     ?>   <form >
            <table >
  <tr >
    <th>Name</th>
    <th>Contact No</th>
    <th>Email</th>
  </tr>
  <br>
  <?php
  while($row=mysqli_fetch_assoc($result))
         { ?>
   <tr>
    <td><input name="FULLNAME"value="<?php echo $row['FULLNAME']?>"/></td>
    <td><input name="contact_no"value="<?php echo $row['contact_no']?>"/></td>
    <td><input name="email"value="<?php echo $row['email']?>"/></td>
<br>
   </tr>
         </table>
            </form>
            <?php
         }

?>




