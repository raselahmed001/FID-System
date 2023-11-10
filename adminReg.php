<?php

include('includes/config.php');

session_start();

error_reporting(0);


//sigup section

if (isset($_POST["signup"])) {
  //getting the data
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_Full_Name"]);
  $beArea = mysqli_real_escape_string($conn, $_POST["Area"]);
  $becontact_no = mysqli_real_escape_string($conn, $_POST["contact_no"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_Email"]);
  $password = mysqli_real_escape_string($conn, $_POST["signup_Password"]);
  $cpassword = mysqli_real_escape_string($conn, $_POST["signup_cPassword"]);
  $begender = mysqli_real_escape_string($conn, $_POST["gender"]);
  $pass=md5($password);
  $cpass=md5($cpassword);

  //check the email 
  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM  register WHERE email='$email'"));
  
  

  if ($password  !== $cpassword) {
    echo "<script>alert('Password did not Match');</script>";
  } elseif ($check_email > 0) {
    echo "<script>alert('Email already Exists in out Database.');</script>";
  } else {
    $sql = "INSERT INTO  adminreg(FULLNAME, area, contact_no, EMAIL, PASSWORD, gender) 
    VALUES ('$full_name','$beArea','$becontact_no','$email','$pass','$begender')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      $_POST["signup_Full_Name"] = "";
      $_POST["Area"] = "";
      $_POST["contact_no"] = "";
      $_POST["signup_Email"] = "";
      $_POST["signup_Password"] = "";
      $_POST["signup_cPassword"] = "";
      $_POST["gender"] = "";
      echo "<script>alert('User SignUp Successfully ');</script>";
    } else {
      echo "<script>alert('User SignUp Failed');</script>";
    }
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Register Here</title>
  <style>
    div {
      
      font-size: 1rem;
      line-height: 1.50;
      padding-left: .75em;
      padding-right: .75em;
      width: 400px;
      height: 500px;
      margin-left: 400px;
      margin-top: 10px;
      border-style: outset;
      border-radius: 5px;
      
     
    }

    label {
      
      font-size: 20px;
      margin-left: 2 px;
      margin-top: 2px;
      color: black;
    }
    input[type="submit"]{
         margin-left: 0px;
         color:white;
         background-color:#4267B2;
         
         

        }
        body{
          background-color: lightblue;;
          border-radius: 0.5rem 0.5rem 0 0;
          
        }
        
        
        
  </style>


</head>

<body>
  <h3 class="reg">
    Registration Form
  </h3>
  <form action="" method="post" class="">
    <div>
      <label>Name:</label><br>
      <input type="text" placeholder="Full Name" name="signup_Full_Name" value="<?php echo $_POST["signup_Full_Name"]; ?>" required />
      <br>
      <br>
      <label>Adress:</label><br>
      <input type="text" class="form-control" placeholder="House-No,Road-No...." id="" name="Area" value="<?php echo $_POST["Area"]; ?>" required>
      <!-- <input type="text" placeholder="House-No,Road-No...."> -->
      <br>
      <br>

      <label>phone Number:</label><br>
      <input type="text" placeholder="Contact Number" name="contact_no" value="<?php echo $_POST["contact_no"]; ?>" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">


      <!-- <input type="number" placeholder="+8801XXXXXXXXX"> -->
      <br>
      <br>

      <label>Email:</label><br>
      <input type="email" placeholder="Email Address" name="signup_Email" value="<?php echo $_POST["signup_Email"]; ?>" required />
      <!-- <input type="email"> -->
      <br>
      <br>

      <label>Password:</label><br>
      <input type="password" placeholder="Password" name="signup_Password" value="<?php echo $_POST["signup_Password"]; ?>" requird />
      <!-- <input type="password"> -->
      <br>
      <br>

      <label>Confirm Password:</label><br>
      <input type="password" placeholder="Confirm Password" name="signup_cPassword" value="<?php echo $_POST["signup_cPassword"]; ?>" required />
      <!-- <input type="password"> -->
      <br>
      <br>

      <!-- 
    <label>Gender:</label>
    <select>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select> -->

      <label for="gender">Gender :</label>
      <select name="gender" id="gender" class="form-control" value="<?php echo $_POST["gender"]; ?>" required>
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Fe-male">Fe-male</option>
      </select>


      <br>
      <br>

      <!-- <input type="submit" class="btn" value="Register" name="signup" /> -->
      <!-- <input type="Submit" value="Register"> -->
      <input type="submit" class="btn" value="Signup" name="signup" />
      <li><a href="adminLogin.php">Login</a></li>



    </div>
  </form>
</body>

</html>