<?php

include('includes/config.php');

session_start();

error_reporting(0);


// login section
if (isset($_POST["login"])) {

    //getting the data
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $password=md5($password);

    //check the email
    $check_email = mysqli_query($conn, "SELECT email,password FROM adminreg WHERE email='$email' &&  password='$password'");
    if (mysqli_num_rows($check_email) > 0) {
        $row = mysqli_fetch_assoc($check_email);
        $_SESSION["email"] = $row["email"];
        header("Location: AdminHome.php");
    } else {
        echo "<script>alert('Login details is Incorrect. Please try again');</script>";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title> Login page </title>
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

        input[type=email],
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
            <label>User Email</label><br>
            <input type="email" placeholder="Email Address" name="email" />
            <br>
            <br>
            <label> Password</label><br>
            <input type="password" placeholder="Password" name="password" />
            <br>
            <br>
            
            <input  type="submit" value="Login" name="login" />
            <p class="mb-0 me-2">Don't have an account?</p>
        </form>

        <ul>
            <li>
                <a href="adminReg.php"> Register </a>
            </li>
        </ul>
    </div>
</body>

</html>