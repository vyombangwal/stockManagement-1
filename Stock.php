<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="stock";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
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

	<select name="cat">
	<?php
	if(mysqli_num_rows($result)>0){
		while($row= mysqli_fetch_row($result)){

			?>
			<option value=<?php $row[0]?>>
				<?php echo $row[0];?>
			</option>
		<?php }?>
			</select><?php
		
	}

	?>	

	WANT TO ADD A NEW CATEGORY?<br>	
	<form action="newcat.php" method="POST">
		<input type="submit" value="Create">
	</form>
	<br><br>
	<a href="newsubcat.php"><button>WANT TO ADD NEW SUBCATEGORY?</button></a>

	</body>
	</html>