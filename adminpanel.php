<?php 
session_start();
if(!isset($_SESSION['admin_email']))
{
	echo "<script>window.open('admin_login.php','_self')</script>";
}
else
{

?>
<!Doctype html>
<html>
	<head>
		<title>Admin panel</title>
		<link rel="stylesheet" href="admin.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<header>
	<h1>Welcome to Admin Panel</h1>
	</header>
	
	Welcome:<font color="red" size="5"></h1>
	<aside><h2>Manage Content</font>

	<h2><a href="adminpanel.php?insert_job">Insert Intern Update</a></h2>	
	<h2><a href="adminpanel.php?view_apply_detail">View Apply Details</a></h2>
	<h2><a href="logout.php">Admin Logout</a></h2>	
	
	</aside>
	
	<center><h1 style="margin-top: -30px;">This is Your Admin Panel</h1>
	<!-- <p>You Can Manage All Of Your Webste content Here</p></center> -->
	<h2 style="color: red; text-align: center; padding: 30px;"><?php echo @$_GET['logged_in']; ?></h2>
	<?php 
		// if(isset($_GET['insert_job']))
		// {
		// include("insert_job.php");
		// }
	   if(isset($_GET['view_apply_detail']))
		{
			include ("view_apply_detail.php");
			//echo "<script>window.open('edit_pro.php','_self')</script>";
		}
		
	?>

</body>
</html>
<?php } ?>