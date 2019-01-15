<?php
include "navbar.php";
$catname=$_GET['cat'];
$subname=$_GET['subcat'];
$sql2="DELETE FROM $catname WHERE subcat='$subname'";

$sql1="DROP TABLE $catname";

?>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
$(document).ready(function(){
  $("#myInput").focus(function(){
    $(this).css("background-color", "#cccccc");
  });
  $("#myInput").blur(function(){
    $(this).css("background-color", "#ffffff");
  });
});
</script>
</head>
<title></title>
<body>
 <?php
 if($subname==null){
 	$result1=mysqli_query($conn,$sql1);
 	echo "successfully deleted:".$catname;
 }
 else
 {
$result2=mysqli_query($conn,$sql2);
echo "Table after Deletion";
$sql3="SELECT * FROM $catname";
$result3=mysqli_query($conn,$sql3);
?>
<div class="container mt-5">
		<form class="form-inline my-2 my-lg-0">
      <input class="form-control-sm " id="myInput" type="search" placeholder="Search in this table" aria-label="Search">
      
    </form><br>
			<table border="2">
   <tr>
      <th>Sno</th>
      <th>Name</th>
      <th>Quantity</th>
    </tr><tbody id="myTable""><tr>
    <?php
    if(mysqli_num_rows($result3)>0){
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

?>
</tr>
</tbody>
</table>
</div>
<?php 	
 }
 ?>
</body>
</html>