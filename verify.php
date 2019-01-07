<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="Stock";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$uname=$_POST['uname'];
$pw=$_POST['pword'];

$sql="SELECT * FROM users WHERE username='"$uname"' AND password='"$pw"'";

$result = mysql_query($conn,$sql);
if($result)
{
	echo "success";
}
else
{
	echo "failure";
}
?>