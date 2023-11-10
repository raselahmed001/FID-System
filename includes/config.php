 <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "full_identity_database_system";

   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Database Conncetion failed");

   // if ($conn->connect_errno) {
   //     printf("Connect failed: %s\n", $conn->connect_error);
   //     exit();
   // }
   // printf("Connected successfully");
   ?>
