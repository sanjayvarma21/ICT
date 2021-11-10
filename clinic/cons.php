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
					<li><a href="register.php">Register patient</a></li>
					<li><a href="view_pinfo.php">View patient</a></li>
					<li><?= $_COOKIE['user']?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
		
		<center>
			<h2>THE DATA ADD INTO CONSULATION</h2>
		</center>
		<div class="footer">
			<h3>All Right Revisied By MentCare 2020</h3>
		</div>
	</body>
</html>
<?php
}
?>