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
$catname=$_POST['name'];
$sql="CREATE TABLE $catname(
		SNO INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		subcat VARCHAR(20) NOT NULL,
		quantity INT,
		INDEX(SNO)
	)";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "category created successfully";
	?>
	<html>
	<head></head>
	<title></title>
	<body><a href=Stock.php><button>go back</button></a>
	</body>
	</html>
	<?php
}
else 
{
 echo "failed to create";
}
?>
