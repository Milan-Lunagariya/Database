<?php
	require "connection.php";
	
	// Not Require any Request
	$sel = "SELECT * FROM `formnew`";
	$res = mysqli_query($con,$sel);
	
?>
<style>
	table{
		font-size : 30px;
		font-style : italic;
		background-image : linear-gradient(to bottom,lightgreen 2%,lightblue,orange,yellow);
		color-opacity : 0.5;
	}
	h1{
		font-size : 50px;
		text-align : center;
	}
	#allchk{
		width : 40px;
		height : 60px;
	}
	#chk{
		width : 25px;
		height : 30px;
	}
	.alldelete{

		height : 70px;
		width : 300px;
		margin : 90px;
		padding : 20 30px 20px 30px;
		border : 4px double blue;
		font-size : 25px;
		border-radius : 20px;
		background : red;
		color : white;
		
	}
	
</style>

<script>
	function allsel(){
		var allchk = document.getElementsByName('allchk');
		var chk = document.getElementsByName('chk');
		
		
		// for(let i=0; i<=chk.length; i++){
			// if(allchk[0].checked == true){
				// chk[i].checked = true;
			// }
			// if(allchk[0].checked == false){
				// chk[i].checked = false;
			// }
		// }
		if(chk[0].checked == true){
			allchk[0].checked = true;
			alert("Alert");
		}
	}
</script>

	<h1>Ragister Form Detail</h1>
<table border="3" align="center" cellpadding="5px" cellspacing="10px">
	<tr>
		<th><input type="checkbox" onclick="allsel()" name="allchk" id="allchk"><label for="allchk">All Select</label></th>
		<th>Id</th>
		<th>Name</th>
		<th>E-mail</th>
		<th>Password</th>
		<th>Contact No</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>

	<?php
		
		$count = 0;
		while($data=mysqli_fetch_assoc($res))
		{
			//Not Require $id = $data['id'] beacuse directly pass echo $data['id'] on line 29
	?>
			<tr>
				<td><input type="checkbox"  name="chk"><?phpx  $count++; echo $count;?></td>
				<td><?php echo $data['id']; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['psd']; ?></td>
				<td><?php echo $data['con']; ?></td>
				<td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
				<td><a href="update.php?id=<?php echo $data['id']; ?>">Update</a></td>
			</tr>
	<?php
		}
	?>
</table>

	<div align="center" >
		<a href="alldetele.php?id=<?php echo $data['id']; ?>" class="alldelete">Delete</a>
	</div>