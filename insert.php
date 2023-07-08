<?php
	include "connection.php";

	$name=$_REQUEST['name'];
	$email = $_REQUEST['email'];
	$psd = $_REQUEST['psd'];
	$cno = $_REQUEST['con'];
	
	$ins = "INSERT INTO `formnew`(`name`, `email`, `psd`, `con`) VALUES ('$name','$email','$psd','$cno')";
	$res = mysqli_query($con,$ins);
	header("location:login.php");
?>
