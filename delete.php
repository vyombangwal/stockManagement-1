<?php
include 'navbar.php';
$catname="computer";
$subname="mouse";
$sql2=" DELETE FROM $catname WHERE subcat='$subname'";
$sql=" DROP TABLE $catname";





?>
<html>
<head>
		</head>
	<title>
	</title>
	<body>
     
    <?php
      if($subname==NULL){
       $result1=mysqli_query($conn,$sql);

        ?>

    <div class="jumbotron">
  <h1>SUCCESS</h1> 
  <p>Category deleted</p> 
  <a class="btn btn-outline-light btn-lg" style=" " href="index.php" title="view">go back</a>
</div>

<?php
}
else{
    $result2=mysqli_query($conn,$sql2);
    $sql3="SELECT * FROM $catname";
    $result3=mysqli_query($conn,$sql3);
   if(mysqli_num_rows($result3)>=0){
    ?>
  <table border="2">
   <tr>
      <th>Sno</th>
      <th>NAme</th>
      <th>Quantity</th>
    </tr><tr><?php
    while ($row = mysqli_fetch_array($result3))
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
