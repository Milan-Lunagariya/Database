<?php
	include "connection.php";
	$id = $_REQUEST['id'];
	$del = "DELETE FROM `formnew` WHERE `id`='$id'";
	$res = mysqli_query($con,$del);
	header("location:detail.php");
?>