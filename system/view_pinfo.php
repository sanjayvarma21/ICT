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
		<title>Patient Info</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<nav>
			<div class="nav-logo">
				<h2>MentCare System</h2>
			</div>
			<div class="menu">
				<ul>
					<li><a href="view_pinfo.php">View Patients</a></li>
					<li><a href="view_appointments.php">View appointments</a></li>
					<li><a href="view_records.php">View Records</a></li>
					<li><?= $_COOKIE['user']?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
		<center><h3>View patient Details</h3></center>
		<table id="patient">
		  <tr>
			<th>Patient Name</th>
			<th>Patient Age</th>
			<th>Patient Gender</th>
			<th>Patient Email</th>
			<th>Patient Phone</th>
			<th>Patient Address</th>
			<th>Patient Problem</th>
		  </tr>
		  	<?php
				$sql=$conn->query("select * from register_patients");
				while($sql_rows=$sql->fetch())
				{
			?>
		  <tr>
			<td><?=$sql_rows['p_name']?></td>
			<td><?=$sql_rows['p_age']?></td>
			<td><?=$sql_rows['p_gender']?></td>
			<td><?=$sql_rows['p_email']?></td>
			<td><?=$sql_rows['p_phone']?></td>
			<td><?=$sql_rows['p_address']?></td>
			<td><?=$sql_rows['p_problem']?></td>
			
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