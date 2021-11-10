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
		<title>Clinical HomePage</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<nav>
			<div class="nav-logo">
				<h2>MentCare System</h2>
			</div>
			<div class="menu">
				<ul>
					<li><a href="register.php">Register Patient</a></li>
					<li><a href="view_pinfo.php">View Patient</a></li>
					<li><?= $_COOKIE['user']?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
			<div class="sys-users">
				<div class="sys-items">
					<div class="clinic-staff">
						<a href="register.php"><img src="images/patient.png"></a>
						<h3>Register Patient</h3>
					</div>
					
				</div>
				<div class="sys-items">
					<div class="admin-staff">
						<a href="view_pinfo.php"><img src="images/medical-care.png"></a>
						<h3>View Patients</h3>
					</div>
					
				</div>

			</div>
		
		<div class="footer">
			<h3>All Right Revisied By MentCare 2020</h3>
		</div>
	</body>
</html>
<?php
}
?>