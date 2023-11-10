<?php

include('includes/config.php');

session_start();

error_reporting(0);


// login section
if (isset($_POST["login"])) {

    //getting the data
    $User_ID = mysqli_real_escape_string($conn, $_POST["User_ID"]);
    $Password = mysqli_real_escape_string($conn, $_POST["Password"]);
    $Password=md5($Password);

    //check the email
    $check = mysqli_query($conn, "SELECT User_ID,Password FROM user1 WHERE User_ID='$User_ID' &&  Password='$Password'");
    if (mysqli_num_rows($check) > 0) {
        $row = mysqli_fetch_assoc($check);
        $_SESSION["User_ID"] = $row["User_ID"];
        $_SESSION["Password"] = $row["Password"];
        header("Location: SergentHome.php");
    } else {
        echo "<script>alert('Login details is Incorrect. Please try again');</script>";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title> FID System </title>
    <style>
        div {
        
            width: 400px;
            height: 500px;
            margin-left: 400px;
            margin-top: 50px;
            background-color: #fff;
           
        }

        h1 {
            margin-left: 40px;
        }

        label {
            font-size: 35px;
            margin-left: 40px;
        }

        input[type=text],
        [type=Password] {
            width: 300px;
            height: 20px;
            margin-left: 40px;
        }

        input[type="submit"]{
         margin-left: 50px;
         height: 30px;
         width: 60px;
         background-color: #0d6efd;
         color: #fff;
         border-color: #0d6efd;
         
         

        }
        body{
            background-color: lightblue;
        }
        p{
            margin-left: 40px;

        }
        .logo{
            margin-left: 40%;
            margin-top: 10%;
            height: 70px;
            width: 70px;
            vertical-align: middle;
            object-fit: contain;
        }
    </style>

</head>

<body>

    <div>
      
         <img  class="logo"src="img/tt.png" alt="">
      
        <br>
        <br>
        <h1>
            FID SYSTEM
            
            
        </h1>

        <form action="" method="post" class="sign-in-form">
           
            <p>Please login to your account</p>
            <label>User ID</label><br>
            <input type="text" placeholder="User ID" name="User_ID"/>
            <br>
            <br>
            <label> Password</label><br>
            <input type="password" placeholder="Password" name="Password" />
            <br>
            <br>
            
            <input  type="submit" value="Login" name="login" />
          
        </form>

    </div>
</body>

</html>