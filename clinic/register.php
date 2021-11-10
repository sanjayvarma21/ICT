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
		<div class="main-content">
		<div class="log-main">
			<div class="log">
			<h3>Patient Register</h3>
				<form action="reg-action.php" method="post">
					<div class="form-group">
						<input type="text" name="p_name" placeholder="Enter Patient Name">
					</div>
					<div class="form-group">
						<input type="text" name="p_age" placeholder="Enter Patient Age">
					</div>
						<label style="color:#ffffff">Gender:</label>
						<input type="radio" name="p_gender" value="male"> <span style="color:#ffffff">Male </span>
						<input type="radio" name="p_gender" value="female"> <span style="color:#ffffff">Female </span>
					
					<div class="form-group">
						<input type="email" name="p_email" placeholder="Enter Patient Email" >
					</div>
					<div class="form-group">
						<input type="tel" name="p_phno" placeholder="Enter Patient PhoneNumber">
					</div>
					<div class="form-group">
						<textarea name="p_address" rows="5" placeholder="Eneter Patient Address"></textarea>
					</div>
					<div class="form-group">
						<textarea name="p_problem" rows="5" placeholder="Eneter Patient Problem"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="Add Patient Details" class="btn-submit">
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