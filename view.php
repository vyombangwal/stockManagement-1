<?php
include "navbar.php";
$catname=$_GET['catname'];
$subname= "mouse";
$sql1="SELECT * FROM $catname";
$result1=mysqli_query($conn,$sql1);
$sql2="SELECT * FROm $catname WHERE subcat='$subname'";
$result2=mysqli_query($conn,$sql2);
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
    <title>
    </title>
    <body>
        <div class="container mt-5">
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control-sm " id="myInput" type="search" placeholder="Search in this table" aria-label="Search">
      
    </form><br>
            <table border="2">
   <tr>
      <th>Sno</th>
      <th>NAme</th>
      <th>Quantity</th>
    </tr><tbody id="myTable""><tr>
    <?php
        if(mysqli_num_rows($result2)==0){
    if(mysqli_num_rows($result1)>0){
    while ($row = mysqli_fetch_array($result1))
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
</tbody>
</table>
</div>
    </body>
    </html>