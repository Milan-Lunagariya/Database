<?php
	include "connection.php";
	if(isset($_POST['sbt']))
	{
		$name = $_REQUEST['name'];
		$psd = $_REQUEST['psd'];
		$sel = "SELECT * FROM `formnew` WHERE `name`='$name'";
		$res = mysqli_query($con,$sel);
		$num = mysqli_num_rows($res);
		$data = mysqli_fetch_assoc($res);
		
		if($num<1)
		{
			header("Location:login.php?error=404");
		}else if($data['psd']!= $psd)
		{
			header("Location:login.php?error=403");
		}else{
			session_start();
			$_SESSION['id']=$data['id'];
			header("location:dashboard.php");
		}
	}
?>