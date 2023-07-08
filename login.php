<html>
	<head>
		<style>
		.box{
				border : 5px inset blue;
				box-shadow : 18px 3px 50px white;
				width : 500px;
				height : 400px;
				align : center;
				color : black;
				font-weight : bold;
				background : silver;
				padding : 50px;
				font-Size : 45px;
				margin : 50px;
			}
			body{
				display : flex;
				justify-content : center;
				align-items : center;
				background : black;

			}
			input{
				margin : 20px; 
				height : 5%;
				width : 90%;
				font-Size : 30px;	
				border : 2px inset blue;	
				padding : 30px;
				border-radius : 20px;
			}
			input[type=submit]{
				background : blue;
				color : white;
				padding : 20px
				height : 8%;
				width : 30%;
				font-Size : 30px;	
				border : 5px inset black;	
				margin-left : 1%;	
				box-shadow : 1px 2px 40px lightblue;
				padding : 10px 0px 50px 0px;
			}
			input[type=reset]{
				background : red;
				color : white;
				padding : 20px
				height : 8%;
				width : 30%;
				font-Size : 30px;	
				border : 5px inset black;	
				margin-left : 20%;	
				box-shadow : 1px 2px 40px lightblue;
				padding : 10px 0px 50px 0px;
			}
			h1{
				font-size : 50px;
				font-family : Lucida Handwriting;
				text-shadow : 4px 4px 3px white;
				color : blue;
			}	
			.signup{
				text-aling : center;
				font-size :30px;
				text-shadow : 0px 0px 5px white;
					display : flex;
				justify-content : center;
				align-items : center;
			}
			a{
				color : lightblue;
			}
		</style>
	</head>
	<body style="color:white">
		<form action="_logincheck.php" method="post">
			<h1>Login Page</h1>
			<div class="box">
				Name : <input type="text" name="name" Placeholder="Enter Your Name.." autocomplete="off"><br>
				Password : <input type="password" name="psd" Placeholder="Enter Your Password.."><br>
						 <input type="reset" value="Reset">
						 <input type="submit" name="sbt" value="Login">
				</div>
				<span class="signup">Don't have an account ? &nbsp;<a href="form.php">Sign up</a></span>
		</form>
	</body>
</html>

<?php 
	if(isset($_GET['error']))
	{
		if($_GET['error']=='404')
		{
			echo "<script>alert('User name NOT FOUND!!');</script>";
		}
		if($_GET['error']=='403')
		{
			echo "<script>alert('Password Is Wrong..');</script>";
		}
	}
?>