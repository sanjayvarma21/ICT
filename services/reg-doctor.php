<?php
 if(!isset($_COOKIE["user"]))
	{
	 	header("location:index.php");
	 	exit;
	}
	else
	{
	    ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Add Doctors</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<nav>
			<div class="nav-logo">
				<h2>MentCare System</h2>
			</div>
			<div class="menu">
				<ul>
					<li><a href="reg-doctor.php">Add Doctors</a></li>
					<li><a href="view_appointments.php">View appointments</a></li>
					<li><a href="view_rocords.php">View Records</a></li>
					<li><?= $_COOKIE['user']?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
		<div class="main-content">
		<div class="log-main">
			<div class="log">
			<h3>Doctors Register</h3>
				<form action="reg-action.php" method="post">
					<div class="form-group">
						<input type="text" name="d_name" placeholder="Enter Doctor Name">
					</div>					
					<div class="form-group">
						<input type="email" name="d_email" placeholder="Enter Doctor Email" >
					</div>
					<div class="form-group">
						<input type="tel" name="d_phno" placeholder="Enter Doctor PhoneNumber">
					</div>
					<div class="form-group">
						<textarea name="d_address" rows="5" placeholder="Eneter Doctor Address"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="d_special" placeholder="Enter Doctor Specalist">
					</div>
					<div class="form-group">
						<input type="submit" value="Add Doctors Details" class="btn-submit">
					</div>
					
				</form>
			</div>
		</div>
		</div>
		
		<div class="footer-log">
			<h3>All Right Revisied By MentCare 2020</h3>
		</div>
	</body>
</html>
<?php
}
?>