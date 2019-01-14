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
$Cname=$_POST['datapost'];
$sql2="SELECT subcat FROM $Cname ";
$result2=mysqli_query($conn,$sql2);

?><option value="NULL" disabled selected>Sub-category</option><?php
while($row= mysqli_fetch_row($result2)){?>

	<option value=<?php $row[0]?>><?php echo $row[0];?></option>	
	<?php
}

?>