<?php
	include('../db/db.php');
	if(isset($_POST['email']) && ($_POST['password']))
	{
		$email= $_POST['email'];
		$pswd= $_POST['password'];
		
		$querys=$conn->query("select * from `record_manager_tbl` where email='$email' and password='$pswd'" );
		$my_count = $querys->rowCount();
		if ($my_count == 0){
			header('location:index.php?msg=logerror');
		}
		else{
			$row = $querys->fetch();
			setcookie("user", $row['email'], time() + (86400 * 30)); 
			$_SESSION['email']=$row['email'];
			header("location:records_homepage.php");
		}
	}
	
?>