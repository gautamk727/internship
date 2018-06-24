<?php
include ("dbconnection.php"); 
?>
<!Doctype html>
<html>
<head>
<title>Add item</title>
<link rel="stylesheet" href="menu.css">
<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script> -->
</head>
<body>

<div style="margin-left: 300px;">
<h1 style="padding-left: 1px;">Insert Items</h1>

<form action="" method="POST" enctype="multipart/form-data">
<table border="5" width="60%" padding="5">

<tr>
<td>Job Title</td>
<td><input type="text" name="job_title" class="input" style=" width:300px;"></td>
</tr>

<tr>
<td> Job Description</td>
<td><textarea name="job_detail" rows="20" style="height:200px; width:300px;"></textarea></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" name="date" class="input" style=" width:300px;"></td>
</tr>
<tr align="center">

<td colspan=2><input type="submit" name="submit" value="Add Item"></td>
</tr>
</table>
</form>
</div>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$prod_title= $_POST['prod_title'];
	$prod_price= $_POST['prod_price'];
	$prod_desc= $_POST['prod_desc'];
	$Prod_keyword= $_POST['Prod_keyword'];
	$prod_status='on';

	$prod_img= $_FILES['prod_img']['name'];

	$temp_img= $_FILES['prod_img']['tmp_name'];

	if($prod_title=='' OR $prod_img=='' OR $prod_price=='' OR $prod_desc=='' OR $Prod_keyword=='')
	{
		echo "<script>alert('please fill all the field!!')</script>";
		exit();
	}
	else
	{
		move_uploaded_file($temp_img, "images/$prod_img");

		$insert= "INSERT INTO `products`(`prod_title`, `date`, `prod_img`, `prod_price`, `prod_desc`,`Prod_keyword`, `prod_status`) VALUES ('$prod_title' , NOW() , '$prod_img' , '$prod_price' , '$prod_desc' ,'$Prod_keyword', '$prod_status')";

		$run= mysqli_query($con,$insert);
		if($run)
		{
			echo "<script>alert('Item inserted successfully!')</script>";
			echo "<script>window.open('adminpanel.php?insert_pro','_self')</script>";
		}


	}
}

?>