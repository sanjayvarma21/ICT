<?php include('../db/db.php'); ?>
<?php 
     if(!isset($_COOKIE["user"]))
	{
	 	header("location:index.php");
	 	exit;
	}
	else
	{
	$p_id=$_GET['pid'];
	$sql=$conn->query("select * from register_patients where pid='$p_id'");
	$sql_rows=$sql->fetch();
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
					<li><a href="register.php">Register patient</a></li>
					<li><a href="view_pinfo.php">View patient</a></li>
					<li><?= $_COOKIE['user']?></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>
		<br>
				<div class="main-content">
		<div class="log-main">
			<div class="log">
			<h3>Add To Consultation</h3>
				<form action="addcons-action.php" method="post">

					<div class="form-group">
						<input type="text" name="p_id" value="<?=$p_id?>" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="p_name" value="<?= $sql_rows['p_name'] ?>" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="p_age" value="<?= $sql_rows['p_age'] ?>" readonly>
					</div>
					<div class="form-group">
						<input type="text" name="p_gender" value="<?= $sql_rows['p_gender'] ?>" readonly>
					</div>
					
					<div class="form-group">
						<textarea name="p_problem" rows="5" readonly><?= $sql_rows['p_problem'] ?></textarea>
					</div>
					
					<div class="form-group">
						<select name="specialist">
						<option value="">---name(specialist)---</option>
							<?php 
						$sql1=$conn->query("select * from doctor");
						while($sql1_rows=$sql1->fetch())
						{
					?>
							<option value="<?=$sql1_rows['d_id'] ?>"><?=$sql1_rows['d_name'] ?> (<?=$sql1_rows['specialist'] ?>) </option>
							<?php
						}
						?>
						</select>
					</div>
					<div class="form-group">
						<input type="date" name="date">
					</div>
					<div class="form-group">
						<input type="submit" value="Add To consulation" class="btn-submit">
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