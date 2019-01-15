<?php
include "navbar.php";
?>
<html>
<head>
	</head>
	<title>
		 
	</title>
	<body>
<?php
	$sql="SELECT TABLE_NAME FROM information_schema.tables 
	WHERE table_schema = 'stock' AND TABLE_NAME NOT LIKE 'users'";
	$result=mysqli_query($conn,$sql);
	?>
<form action="newsubcatcreated.php" method="POST">
	<select name='cat'>
	<?php
	if(mysqli_num_rows($result)>0){
		while($row= mysqli_fetch_row($result)){

			?>
			<option value=<?php echo $row[0]?>>
				<?php echo $row[0];?>
			</option>
		<?php }?>
			</select><?php
		
	}
	?>
	ENTER NAME:<input type="text" name="subcatname" required><br>
	ENTER QUAN:<input type="text" name="subcatquan" required><br>
	<input type="submit">	
	</form>
</body>
	</html>