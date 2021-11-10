<?php include('../db/db.php'); 
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
		<title>Doctor Info</title>
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
		<center> <h3>View Doctors Records</h3></center>
		<table id="patient">
		  <tr>
			<th>Doctor Id</th>
			<th>Doctor Name</th>
			<th>Doctor Email</th>
			<th>Doctor Phone</th>
			<th>Doctor Address</th>
			<th>Specialist In</th>
		  </tr>
		  	<?php
				$sql=$conn->query("select * from doctor");
				while($sql_rows=$sql->fetch())
				{
			?>
		  <tr>
			<td><?=$sql_rows['d_id']?></td>
			<td><?=$sql_rows['d_name']?></td>
			<td><?=$sql_rows['d_email']?></td>
			<td><?=$sql_rows['d-phno']?></td>
			<td><?=$sql_rows['d_address']?></td>
			<td><?=$sql_rows['specialist']?></td>
		  </tr>
		  <?php
				}
			?>
		
		</table>
		<br>
		<div class="footer-log">
			<h3>All Right Revisied By MentCare 2020</h3>
		</div>
	</body>
</html>
<?php
}
?>