<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.bg1{
background: url(bg.jpg) no-repeat center center/cover;
  background-attachment:fixed; 
  background-size:auto*1.5rem auto; 
}

#A1
{	animation-name:exp;
	animation-iteration-count:infinite;
	animation-duration:20s; 
	animation-timing-function:linear;
}
@keyframes exp
{
	0%{color:rgba(0,0,0,0); margin-left:-150px; }
	10%{color:rgba(255,255,255,1); margin-left:0px; }
	100%{color:rgba(255,255,255,1); margin-left:0px; }
}
	</style>
</head>
<body>
	<?php
	include 'navbar.php'
	
	?>
    <div class="" style="padding-top:;" >
    	<div class="bg1" style="height: 40em; width: 100%; ">
    		
  <div class="container">
               <br/>
               <br/>
               <br/>
               
                <h1 id='A1'>WELCOME USER</h1>
                <br/>
                
               <br/>
               <form>
               <div class="form-group" style="width:40%;">
  <label for="sel1" style="font-family:bold; color: white;">Select category:</label>

	<?php
	$sql="SELECT TABLE_NAME FROM information_schema.tables 
	WHERE table_schema = 'stock' AND TABLE_NAME NOT LIKE 'users'";
	$result=mysqli_query($conn,$sql);
	?>

  <select class="form-control" id="cate" name="category" onchange="myfun(this.value);">
  	 <option value="" disabled selected>select category</option>
  	<?php
	if(mysqli_num_rows($result)>0){
		while($row= mysqli_fetch_row($result)){

			?>
    <option value=<?php $row[0]?>><?php echo $row[0];?></option>
    	<?php }?>
    
  </select>	<?php }?>
</div>
  <div class="form-group" style="width:40%;">
  <label for="sel1" style="font-family:bold; color: white;">Select subcategory:</label>

	
  <select class="form-control" id="dataget" name="category">
  	 <option value="" disabled selected>select category</option>
  	<?php
	
			?>
    
    	
    
  </select>	
</div></form>

   <script type="text/javascript">
   	function onchange(str) {
  var xhttp;    
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dataget").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./getplayers.php?Cname="+str, true);
  xhttp.send();}</script>
<div class="container">
 <a class="btn btn-outline-light btn-lg" style=" " href="view.php" title="view">View</a>
 <a class="btn btn-outline-light btn-lg" style="margin-left: 1em;" href="import.php" title="import">Import/Export</a> <a class="btn btn-outline-light btn-lg" style="margin-left: 1em;" href="delete.php" title="Delete">Delete</a>
               
</div></div>

    	</div>
    </div>
</body>
</html>