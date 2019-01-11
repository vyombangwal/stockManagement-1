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
$Cname=$_GET['Cname'];
$sql2="SELECT subcat FROM $Cname ";
$result2=mysqli_query($conn,$sql2);
echo"<select>";
while($row= mysqli_fetch_row($result2)){
	
	echo "<option>"; echo $row[0]; echo "</option>";	
	
}
echo "</select>";
?>