<?php
include "navbar.php";
$catname=$_POST['cat'];
$subname=$_POST['subcatname'];
$subquan=$_POST['subcatquan'];
$sql="INSERT INTO $catname(subcat,quantity) VALUES('$subname','$subquan')";
$result=mysqli_query($conn,$sql);
if($result){
	echo "inserted succesfully";?>
	<html>
	<head></head>
	<title></title>
	<body><a href=Stock.php><button>go back</button></a>
	</body>
	</html>
<?php }
else{
	echo "failed with stupid error";
}
?>
