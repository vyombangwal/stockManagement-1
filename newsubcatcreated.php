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

$catname=$_POST['cat'];
echo $catname;
?>
<html>
<head>
	</head>
	<title>
	</title>
	<body>
	





	</body>
	</html>