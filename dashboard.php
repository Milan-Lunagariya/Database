<body>
<h1 align='center'>Welcome</h1>
<style>
	img{
		height : 300px;
		width : 300px;
		margin-left : 40%;
	}
	body{
		background : silver;
	}
</style>
	<img src="profile.png">

<?php
	require "connection.php";
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:dashboard.php");
	}
	
	$id = $_SESSION['id'];
	$sel = "SELECT * FROM `formnew` WHERE `id`='$id'";
	$res = mysqli_query($con,$sel);
	$row = mysqli_fetch_assoc($res);
	
?>
<style>
		.box{
				border : 5px inset blue;
				box-shadow : 2px 3px 15px red;
				width : 70%;
				color : white;
				font-weight : bold;
				background : black;
				padding : 3%;
				font-Size : 45px;
				text-shadow : 4px 4px 10px red;
				margin-left : 15%;
				border-radius : 20%;
			}
		.boxa{
				border : 5px double lightblue;
				box-shadow : 2px 3px 15px lightgreen;
				width : 10%;
				color : white;
				font-weight : bold;
				background : black;
				padding : 3%;
				font-Size : 45px;
				text-shadow : 10px 5px 10px red;
				border-radius : 0px 30% 0px 20%;
				margin-top : 5%;
			}
		a{
			font-size : 30px;
			color : lightblue;
		}
</style>
<div class="box">
<?php
	echo "<br><br>Id  &nbsp;  :".$row['id']."<br>";
	echo "Name : ".$row['name']."<br>";
	echo "E-mail &nbsp;:".$row['email']."<br>";
	echo "Password &nbsp;:".$row['psd']."<br>";
	echo "Contact &nbsp;:".$row['con']."<br>";
?>
</div>
<div class="boxa">
	<a href='logout.php'>Logout</a>
</div>
</body>


