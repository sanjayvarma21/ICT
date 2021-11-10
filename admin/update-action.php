<?php
	include('../db/db.php');

    if(!isset($_COOKIE["user"]))
	{
	 	header("location:../index.php");
	 	exit;
	}
	else
	{


	
	if(isset($_POST['c_id']) && ($_POST['specialist']) && ($_POST['date']))
	{
		$c_id=$_POST['c_id'];
		$d_id=$_POST['specialist'];
		$adate=$_POST['date'];
		
		 $sql="update `concultation` set d_id='$d_id', date='$adate' where c_id='$c_id'";
		if($conn->query($sql) !== false)
		{
		 header("Location: admin_homepage.php");
		}
		
		
	}
	}
?>