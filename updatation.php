<?php
	include "connection.php";
	
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$psd = $_REQUEST['psd'];
	$cno = $_REQUEST['con'];
	
	$upd = "UPDATE `formnew` SET `name`='$name', `email`='$email', `psd`='$psd', `con`='$cno' WHERE `id`='$id'";
	$res = mysqli_query($con,$upd);
	header("location:detail.php");
?>