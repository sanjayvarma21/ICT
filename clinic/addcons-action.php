<?php
	include('../db/db.php');
	 if(!isset($_COOKIE["user"]))
	{
	 	header("location:index.php");
	 	exit;
	}
	else
	{
	if(isset($_POST['p_id']) && ($_POST['p_name']) && ($_POST['p_age']) && ($_POST['p_gender']) && ($_POST['p_problem']) && ($_POST['specialist']) && ($_POST['date']))
	{
		$pid=$_POST['p_id'];
		$pname=$_POST['p_name'];
		$page=$_POST['p_age'];
		$pgender=$_POST['p_gender'];
		$d_id=$_POST['specialist'];
		$adate=$_POST['date'];
		$pproblem=$_POST['p_problem'];
		
		 $sql="INSERT INTO `concultation` (`p_id`,`p_name`,`p_age`,`p_gender`,`p_problem`,`d_id`,`date`) VALUES ('$pid','$pname', '$page', '$pgender','$pproblem','$d_id','$adate')";
		if($conn->query($sql) !== false)
		{
		 header("Location: cons.php");
		}
		
		
	}
	}
?>