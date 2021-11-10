<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>MentCare System</title>
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<nav>
			<div class="nav-logo">
				<h2>MentCare System</h2>
			</div>
			<div class="menu">
				<ul>
					<li><a href="../clinic/index.php">Clinical Staff</a></li>
					<li><a href="../admin/index.php">Administartors</a></li>
					<li><a href="index.php">Sytem Administartors/Record Manager</a></li>
					<li><a href="../services/index.php">Health Services Manager</a></li>
				</ul>
			</div>
		</nav>
		<div class="log-main">
			<div class="log">
			<h3>Record manager Login</h3>
				<form action="log-action.php" method="post">
					<div class="form-group">
						<input type="email" name="email" placeholder="Enter your Email" >
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Enter your Password">
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn-submit">
					</div>
					
				</form>
			</div>
		</div>
		<div class="footer-log">
			<h3>All Right Revisied By MentCare 2020</h3>
		</div>
	</body>
</html>