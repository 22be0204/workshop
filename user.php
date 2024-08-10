<?php
session_start();
if(!isset($_SESSION["uid"]))
{
header("location:login.php");
}

include("dbconnect.php");

$qry = "SELECT * FROM notice order by id desc limit 5";
$result = mysqli_query($connect, $qry);
$row = mysqli_num_rows($result)

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
<style>

.card-body{
	padding-left: 0;
}
ul li {
	line-height: 40px;
	font-size: 20px;
}

</style>
</head>
<body>
<h1> Welcome User</h1>
<div class="container-fluid">
	<div class="row">
		<div class ="col-md-5">
			<div class="card">
				<div class="card-header bg-dark text-light"> Notice </div>
				<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
					<div class="card-body">
						<ul>


						<?php	if($row>0)
							{
								while($data = mysqli_fetch_assoc($result))
								{ ?>
									 <li> <?php echo $data["notice"]; ?> </li>
										<?php 
								}
							}
							else
								{ ?>
								<li> No Notice Found </li>
							}
							<?php } ?>

							
							</ul>
				</div>
			</marquee>
      		</div>
		</div>
	</div>
</div>	

<a href="logout.php"> Logout </a>
</body>
</html>