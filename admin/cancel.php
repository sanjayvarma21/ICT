<?php
	include('../db/db.php');


    if(!isset($_COOKIE["user"]))
	{
	 	header("location:../index.php");
	 	exit;
	}
	else
	{

	$cid=$_GET['aid'];
	
	$sql="delete from concultation where c_id='$cid'";
		if($conn->query($sql) !== false)
		{
		 header("Location: admin_homepage.php");
		}
	}
?>