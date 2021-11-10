<?php
	include('../db/db.php');
     if(!isset($_COOKIE["user"]))
	{
	 	header("location:index.php");
	 	exit;
	}
	else
	{
	if(isset($_POST['d_name']) && ($_POST['d_email']) && ($_POST['d_phno']) && ($_POST['d_address']) && ($_POST['d_special']))
	{
		$dname=$_POST['d_name'];
		$demail=$_POST['d_email'];
		$dphno=$_POST['d_phno'];
		$daddress=$_POST['d_address'];
		$dspecial=$_POST['d_special'];
		
		 $sql="INSERT INTO `doctor` (`d_name`,`d_email`,`d-phno`,`d_address`,`specialist`) VALUES ('$dname','$demail', '$dphno', '$daddress','$dspecial')";
		if($conn->query($sql) !== false)
		{
		 header("Location: view_records.php");
		}
		
		
	}
	}
?>