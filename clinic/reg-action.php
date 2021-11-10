<?php
	include('../db/db.php');

	if(isset($_POST['p_name']) && ($_POST['p_age']) && ($_POST['p_gender']) && ($_POST['p_email']) && ($_POST['p_phno']) && ($_POST['p_address']) && ($_POST['p_problem']))
	{
		$pname=$_POST['p_name'];
		$page=$_POST['p_age'];
		$pgender=$_POST['p_gender'];
		$pemail=$_POST['p_email'];
		$pphno=$_POST['p_phno'];
		$paddress=$_POST['p_address'];
		$pproblem=$_POST['p_problem'];
		
		 $sql="INSERT INTO `register_patients` (`p_name`,`p_age`,`p_gender`,`p_email`,`p_phone`,`p_address`,`p_problem`) VALUES ('$pname','$page', '$pgender', '$pemail','$pphno','$paddress','$pproblem')";
		if($conn->query($sql) !== false)
		{
		 header("Location: view_pinfo.php");
		}
		
		
	}
?>