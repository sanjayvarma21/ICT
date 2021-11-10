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
					<li><a href="admin_homepage.php">View Appointments</a></li>
					<li><?= $_COOKIE['user']?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
		<center> <h3>Appointment Details</h3></center>
		<table id="patient">
		  <tr>
			<th>Patient Id</th>
			<th>Patient Name</th>
			<th>Patient Age</th>
			<th>Patient Gender</th>
			<th>Patient Problem</th>
			<th>Doctor Id</th>
			<th>Appointment Date</th>
			<th>Reschedule Appointment</th>
			<th>Cancel Appointment</th>
		  </tr>
		  	<?php
				$sql=$conn->query("select * from concultation");
				while($sql_rows=$sql->fetch())
				{
			?>
		  <tr>
			<td><?=$sql_rows['p_id']?></td>
			<td><?=$sql_rows['p_name']?></td>
			<td><?=$sql_rows['p_age']?></td>
			<td><?=$sql_rows['p_gender']?></td>
			<td><?=$sql_rows['p_problem']?></td>
			<td><?=$sql_rows['d_id']?></td>
			<td><?=$sql_rows['date']?></td>
			<td><button><a href="reschedule.php?aid=<?=$sql_rows['c_id']?>">Reschedule Appointment</a></button></td>
			<td><button><a href="cancel.php?aid=<?=$sql_rows['c_id']?>">Cancel Appointment</a></button></td>
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