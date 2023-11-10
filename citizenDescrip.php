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

  <title>Citizen Description</title>
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

            <h1 style="color:red">
               Citizen Description
                <br>
                <br>
            </h1>
            <li
            style="font-size: 20px;
            background-color: #00008B; 
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;"
            ><a  style="color:aliceblue"; href="addCitizen.php">Add Citizen Info</a></li>
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
            display: inline-block;"
            ><a style="color:aliceblue"; href="editCitizen.php">Edit Citizen Info</a></li>
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
            display: inline-block;"
            ><a style="color:aliceblue"; href="addVehicle.php">Add Vehicle Info</a></li>
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
            display: inline-block;"
            ><a style="color:aliceblue"; href="editVehicle.php">Edit Vehicle Info</a></li>
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
            display: inline-block;"
            ><a style="color:aliceblue"; href="deleteVehicle.php">Delete Vehicle Info</a></li>


  
</body>

</html>
