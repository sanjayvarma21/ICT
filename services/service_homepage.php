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
					<li><a href="reg-doctor.php">Add Doctors</a></li>
					<li><a href="view_appointments.php">View appointments</a></li>
					<li><a href="view_rocords.php">View Records</a></li>
					<li><?= $_COOKIE['user']?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
			<div class="sys-users">
				<div class="sys-items">
					<div class="clinic-staff">
						<a href="reg-doctor.php"><img src="images/patient.png"></a>
						<h3>Register Doctors</h3>
					</div>
					
				</div>
				<div class="sys-items">
					<div class="admin-staff">
						<a href="view_appointments.php"><img src="images/checkup.png"></a>
						<h3>View Appointments</h3>
					</div>
					
				</div>
				<div class="sys-items">
					<div class="record-staff">
						<a href="view_records.php"><img src="images/medical.png"></a>
						<h3>View Records</h3>
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