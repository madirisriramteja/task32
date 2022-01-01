<?php 

include 'config1.php';

// error_reporting(0);
$id=$_REQUEST['id'];
$sql = "SELECT * FROM signup_signin_update WHERE id=$id";
$results =mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($results);
$name=$row['username'];
$email=$row['email'];
$number=$row['number'];
if (isset($_POST['submit'])) 
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
    $num=$_POST['number'];
    if($password == $cpassword)
    {
        $sql =" UPDATE signup_signin_update SET id=$id , username='$username' ,email='$email', password='$password' ,number='$num'  WHERE id=$id";
        $results = mysqli_query($con,$sql);
        if($results)
        {
			echo '<script>alert("update succesfull")</script>';
            header ('location: index1.php');
        }
		else{
			die(mysqli_error($con));
		}



    }
	else{
		echo '<script>alert("password not mathcing")</script>';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style3.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">update</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $name; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
            <div class="input-group">
				<input type="number" placeholder="number" name="number" value="<?php echo $number   ; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword"  required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">update</button>
			</div>
		</form>
	</div>
</body>
</html>