<?php
include "navbar.php";

$catname=$_GET['cat'];
$subname=$_GET['subcat'];
$sql="SELECT * FROM $catname WHERE subcat='$subname'";
$result=mysqli_query($conn,$sql);




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
      <th>Name</th>
      <th>Quantity</th>
      <th>Import</th>
      <th>Export</th>
    </tr><tr>
    <?php
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result))
    {
        ?>
        <td><?php echo $row[0];?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><form method="POST">
        	<input type="text" name="import">
        	<input type="submit" value="+">

        </form>
        <?php
        $change=isset($_POST['import']) ? $_POST['import'] : false;
$sql2="UPDATE $catname SET quantity= quantity + $change WHERE subcat='$subname' ";
$result2=mysqli_query($conn,$sql2);
if($change)
{
	header("Location:import.php?cat="+$catname+"&subcat="+$subname);
	$change="false";
}
        ?></td>
        <td><form method="POST">
        	<input type="text" name="export">
        	<input type="submit" value="-">
        	</form>
        	<?php
        	$change=isset($_POST['export']) ? $_POST['export'] : false;
        	$sql2="UPDATE $catname SET quantity= quantity - $change WHERE subcat='$subname' ";
$result2=mysqli_query($conn,$sql2);
if($change)
{
	header("Location:import.php");
	$change="false";
}
      
    
}
}	
?>
</tr>
</table>
</body>
</html>
