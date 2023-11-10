<?php
include('includes/config.php');
session_start();
error_reporting(0);


if (isset($_POST["search"])) {

  //getting the data
  $Lisence_No = mysqli_real_escape_string($conn, $_POST["Lisence_No"]);
     $sql = "Select * FROM fine WHERE Lisence_No='$Lisence_No' ";
     $result=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($result);
            if($count==0) echo "<script>alert('Sorry, ID does not exist');</script>";
        
      ?>
 
            <form action=""method="POST">
            <table>
  <tr>
    <th>Traffic Fine No</th>
    <th>Issue Date</th>
    <th>Issued By</th>
    <th>Due Date</th>
    <th>Reason</th>
    <th>Amount in BDT</th>
  </tr>
  <?php
  while($row=mysqli_fetch_assoc($result))
         { $amount=$amount+1;
          $fine_amount = "Select Amount_in_BDT FROM fine WHERE Lisence_No='$Lisence_No' ";
          
          $fine_result=mysqli_query($conn,$fine_amount);
          $total_sum=$row['Amount_in_BDT'];
          

          $total_fine += $total_sum;
           
           ?>
          
            
  <tr>
    <td><input type="text"name="Traffic_fine_no"value="<?php echo $row['Traffic_fine_no']?>"/></td>
    <td><input type="text"name="Issue_date"value="<?php echo $row['Issue_date']?>"/></td>
    <td><input type="text"name="Issued_by"value="<?php echo $row['Issued_by']?>"/></td>
    <td><input type="text"name="Due_date"value="<?php echo $row['Due_date']?>"/></td>
    <td><input type="text"name="Reason"value="<?php echo $row['Reason']?>"/></td>
    <td><input type="text"name="Amount_in_BDT"value="<?php echo $row['Amount_in_BDT']?>"/></td>
   </tr>
            </form>
            <?php
            $Total=$Amount_in_BDT + $Total;
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
                
                    <h1 class="mt-4"> Fine History </h1>
                    
                    <div class="container" style="padding: 60px 0;">
    <div class="row">
      <div class=" card col-md-6 offset-md-3">
        <div class="panel panel-default" style="padding: 20px;">

          <form action="" method="post" class="form-group form-container">

          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Lisence No :</label>
              <input type="text" class="form-control"placeholder="Enter Driving Lisence" id="" name="Lisence_No" value="<?php echo $_POST["Lisence_No"]; ?>"required>
            </div><br>
          
        <div class="form-group form">
          <button class="btn  btn-danger center-aligned" style="margin-bottom:5px;" type="submit" name="search">Search Citizen</button>
        </div>
        <p style="margin:25px 50px 17px 100px;
                " >Total Fine of Lisence No <?php echo $Lisence_No ?> : <?php echo $amount ?> </p>
                <p style="margin:25px 50px 17px 100px;
                " >Total Fine Amount of Lisence No <?php echo $Lisence_No ?> : <?php echo $total_fine ?> </p>

        </form>
        
        