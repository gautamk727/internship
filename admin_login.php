<?php
session_start();
include ("dbconnection.php");
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title> 
      <link rel="stylesheet" href="admin_login.css" media="all"> 
</head>
<body>
  <body>
  	<h2 style="color: red; text-align: center; padding: 30px;"><?php echo @$_GET['logout']; ?></h2>
<div class="container">
	<section id="content">
		<form action="#" method="post">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" name="uname" required="" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" name="psd" required="" id="password" />
			</div>
			<div style="margin-left: 50px;">
				<input type="submit" name="login" value="Log in" />
				 <a href="#">Lost your password?</a>
				<!--<a href="#">Register</a> -->
			</div>
		</form><!-- form -->
		</section><!-- content -->
</div><!-- container -->

</body>

    <script  src="js/index.js"></script>

</body>

</html>

<?php
if(isset($_POST['login']))
{
	$uname =$_POST['uname'];
	$upass =$_POST['psd'];

	$sel_admin ="select * from admin_login where admin_email='$uname' AND admin_pass='$upass'";
	$run_admin =mysqli_query($con, $sel_admin);

	$check_admin=mysqli_num_rows($run_admin);

	if($check_admin==1)
	{
		$_SESSION['admin_email']=$uname;
		echo "<script>window.open('adminpanel.php?logged_in=You have successfully Login','_self')</script>";
	}
	else
	{
		echo "<script>alert('Admin Email or password is incorrect, Try again!')</script>";
	}
}
?>
