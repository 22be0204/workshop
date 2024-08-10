<?php


if(isset($_POST["changepwdbtn"]))
{
$connect = mysqli_connect("localhost","root","","project5");
$un = $_POST["username"];

$cpwd = $_POST["cpassword"];

$npwd = md5($_POST["npassword"]);


$qry = "SELECT * FROM user WHERE username='$un' AND password = '$cpwd'"; 

$result = mysqli_query($connect, $qry);
$data = mysqli_fetch_assoc($result);
$id = $data["id"];
$row = mysqli_num_rows($result);
if($row>0)
{
	$qry = "UPDATE user SET 'password`= '$npwd' WHERE id= '$id'";
	$result = mysqli_query($connect, $qry);
	if($result);
	{
?><script> alert("Password changed  successfully"); </script> <?php
}else{
		?><script> alert("Something went wrong"); </script> <?php



	}
}
else{
?><script> alert("Invalid username or password"); </script> <?php
	
}
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 mx auto">
			<div class="card">
				<div class="card-header bg-success text-light">
					Password change Form
				</div>
				<div class="card-body">
					<form method="post">
						<div class="form-group">
							<label> Username</label>
							<input type="text" name="username" class="form-control">
						</div>

						<div class="form-group">
							<label>  Current Password</label>
							<input type="password" name="cpassword" class="form-control">
						</div>

						<div class="form-group">
							<label> New Password</label>
							<input type="password" name="npassword" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-success" name="changepwdbtn"> Change Password</button>

						</div>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>