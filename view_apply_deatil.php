<?php
// if(!isset($_SESSION['admin_email']))
// {
// 	echo "<script>window.open('admin_login.php','_self')</script>";
// }
// else
// {

?>
<!DOCTYPE html>
<html>
<head>
	<title>View All Customer</title>
</head>
<body>
	<div>
		<form action="" method="post" enctype="multipart/form-data">
			<table border="5" align="center" bgcolor="#FFCC99">
				<tr align="center">
					<td colspan="6"><h2>View All Customer</h2></td>
				</tr>
				<tr>
					<th>Sr No.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Contact</th>
					<th>Course_Name</th>
					<th>Course_Duration</th>
					<th>Apply Date</th>
					
				</tr>
				<?php
				include("dbconnection.php");
				$i=0;
				$get_c ="select * from user_details";
				$run_c =mysqli_query($con, $get_c);
				while ($row_c=mysqli_fetch_array($run_c)) 
				{

					$name =$row_c['name'];
					$email =$row_c['email'];
					$contact =$row_c['contact'];
					$course_name =$row_c['course_name'];
					$course_duration =$row_c['course_duration'];
					$apply_date =$row_c['apply_date'];
					$i++;
					//$c_id =$row_c[''];
				
				?>
				<tr align="center">
					<td><?php echo $i; ?></td>
					<td><?php echo $name; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $contact; ?></td>
					<td><?php echo $course_name; ?></td>
					<td><?php echo $course_duration; ?></td>
					<td><?php echo $apply_date; ?></td>
				</tr>
				<?php } ?>
			</table>
		</form>
	</div>

</body>
</html>

<?php //} ?>