<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/56032bdc1c.js" crossorigin="anonymous"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style2.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
<section>
  <?php

include 'config1.php';

// error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index1.php");
}
?>

<?php

if (isset($_POST['submit'])) {
	$user = $_POST['user'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
  $number = ($_POST['number']);


	if ($password == $cpassword) {
		$sql = "SELECT * FROM signup_signin_update WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO signup_signin_update (username, email, password , number)
					VALUES ('$user', '$email', '$password' , '$number')";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$user = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
        $_POST['number']="";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
  ?>
  <?php
if (isset($_POST['login'])) {
	$email1 = $_POST['email1'];
	$pass = md5($_POST['pass']);

	$sql1 = "SELECT * FROM signup_signin_update WHERE email='$email1' AND password='$pass'";
	$result1 = mysqli_query($con, $sql1);
	if ($result1->num_rows>0) 
  {
		$row1 = mysqli_fetch_assoc($result1);
		$_SESSION['username'] = $row['username'];
		header("Location: index1.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    
	}
}

?>
</section>


    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="email1" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" placeholder="Password" required/>
            </div>
            <input type="submit" name="login" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form  method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="user"  pattern="[A-Za-z]{}" title="only letters without space" placeholder="Username"required />
              <div id="results"></div>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email"  placeholder="Email"  required/>

            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password"  placeholder="Password"   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required/>

            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="cpassword" placeholder="verify Password" required />

            </div>
            <div class="input-field">
            <i class="fas fa-phone-alt"></i>
            <input type="number" name="number"   placeholder="number" min="999999999" max="9999999999" required/>
            </div>
            <input type="submit" name="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
                amazon helps u  to buy products very easy way and offerable prices
            </p>
            <button class="btn1" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="./log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
                free delivery for every product
            </p>
            <button class="btn1" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="./register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app1.js"></script>
    <script></script>


  </body>
</html>