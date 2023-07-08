<html>
	<head>
		<style>
			.box{
				border : 5px inset blue;
				box-shadow : 2px 3px 15px red;
				width : 100%;
				align : center;
				color : white;
				font-weight : bold;
				background : silver;
				padding : 50px;
				font-Size : 30px;
				background-image : url('form1.jpg');
				// text-shadow : 4px 4px 10px red;
			}
			body{
				display : flex;
				justify-content : center;
				align-items : center;
				background : silver;
			}
			input{
				margin : 20px; 
				height : 5%;
				width : 90%;
				font-Size : 20px;
				padding	: 10px;			
				border : 2px inset orange;	
				backdrop-filter:opacity(5%);
			}
			input[type=submit]{
				background : green;
				color : white;
				margin : 20px; 
				height : 8%;
				width : 30%;
				font-Size : 30px;	
				border : 5px inset black;	
				margin-left : 1%;	
				box-shadow : 1px 2px 40px lightgreen;
			}
			input[type=reset]{
				background : blue;
				color : white;
				margin : 20px; 
				height : 8%;
				width : 30%;
				font-Size : 30px;	
				border : 5px inset black;		
				margin-left : 22%;
			}
			h1{
				font-size : 50px;
				font-family : Lucida Handwriting;
				text-shadow : 4px 4px 3px white;
			
			}
			
			.formerror{
				color : red;
				font-size : 22px;
				text-shadow : 1px 0px 15px red;
				background : black;
				width : 100%;
			}
		</style>
		
		<script>
			function clearErrors(){
				
				errors = document.getElementsByClassName('formerror');
				
				for(let item of errors){
					item.innerHTML = "";
				}
			}
			
			function seterror(id, error){
				element = document.getElementById(id);
				element.getElementsByClassName('formerror')[0].innerHTML = error;
			}
			
			function validateForm(){
				
				clearErrors();
				
				var name = document.forms['myForm']["name"].value;
				if(name == 0){
					seterror("name", "**Name should be not empty , Please fill-up name!");
					return false;
				}
				if(name.length < 5){
					seterror("name", "**Name of length is too be sort , Please Full name enter");
					return false;
				}
				
				var email = document.forms['myForm']["email"].value;
				if(email == 0){
					seterror("email", "**E-mail should be not empty ,Please fill-up email!");
					return false;
				}
				if(email.length > 30){
					seterror("email", "**E-mail of length long is not allowed");
					return false;
				}
				
				var psd = document.forms['myForm']["psd"].value;
				if(psd == 0){
					seterror("psd", "**Password should be not empty ,Please fill-up Password!");
					return false;
				}
				if(psd.length < 8){
					seterror("psd", "**Password must be at list 8 charcter long");
					return false;
				}
				
				var con = document.forms['myForm']["con"].value;
				if(con == 0){
					seterror("con", "**Phone Number should be not empty ,Please fill-up Phone number!");
					return false;
				}
				if(isNaN(con) == true){
					seterror("con", "**Please do not enter alfabet ! ");
					return false;
				}
				if(con.length != 10){
					seterror("con", "**Phone number must be 10 digit!");
					return false;
				}
				
			}
		</script>
		
	</head>
	<body>
		
		<form name="myForm" action="insert.php" onsubmit="return validateForm()">
			<h1>Ragister Form</h1>
			<div class="box">
			
				<div id="name">
					Name:<input type="text" name="name"  placeholder="Enter Your Name"  autocomplete="on"><div class="formerror"></div>
				</div>
				
				<div id="email">
					E-mail:<input type="email" name="email"  placeholder="Enter Your E-mail Address"><div class="formerror"></div>
				</div>
				
				<div id="psd">
					Password:<input type="password" name="psd" placeholder="Enter Your Password"><div class="formerror"></div>
				</div>
				
				<div id="con">
					Phone No.:<input type="phone" name="con" placeholder="Enter Your Mobail Number"><div class="formerror"></div>
				</div>
			
						<input type="reset" name="sbt" value="Clear">
						<input type="submit" id="sbt" value="Submit">
			</div>
		</form>          
	</body>
</html>
