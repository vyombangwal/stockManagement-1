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
$catname="computer";
$subname= "mouse";
$sql1="SELECT * FROM $catname";
$result1=mysqli_query($conn,$sql1);
$sql2="SELECT * FROm $catname WHERE subcat='$subname'";
$result2=mysqli_query($conn,$sql2);
?>
<html>
<head>
	</head>
	<title>
	</title>
	<body>
			<table border="2">
   <tr>
      <th>Sno</th>
      <th>NAme</th>
      <th>Quantity</th>
    </tr><tr>
    <?php
    	if(!($result2)){
    if(mysqli_num_rows($result1)>0){
    while ($row = mysqli_fetch_array($result2))
    {
        ?>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
    </tr>
    <?php
}
}
}
else{
   if(mysqli_num_rows($result2)>0){
    while ($row = mysqli_fetch_array($result2))
    {
        ?>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
    </tr>
    <?php
}
}	
}
?>
</tr>
</table>

	</body>
	</html>