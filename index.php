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
	include 'navbar.php';
	
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
               <div class="form-group" style="width:40%;">
  <label for="sel1" style="font-family:bold; color: white;">Select category:</label>

	<?php
	$sql="SELECT TABLE_NAME FROM information_schema.tables 
	WHERE table_schema = 'stock' AND TABLE_NAME NOT LIKE 'users'";
	$result=mysqli_query($conn,$sql);
	?>
	<form method="POST">
  <select class="form-control" id="sell" name="category" onchange="myfun(this.value)">
  	 <option disabled selected>select category</option>
  	<?php
	if(mysqli_num_rows($result)>0){
		while($row= mysqli_fetch_row($result)){
			?>
    <option value=<?php echo $row[0]?>><?php echo $row[0]?></option>
    	<?php }?>
    
  </select>	<?php }?>
</div>
  <div class="form-group" style="width:40%;">
  <label for="sel1" style="font-family:bold; color: white;">Select subcategory:</label>

  <select class="form-control" id="sell2" name="Subcategory" onchange="myfun2()">
  	 <option value="" disabled selected>Sub-category</option>
    
  </select>	
</div>
<script type="text/javascript">
	function myfun(datavalue){
		$.ajax({
			url: 'subcatindex.php',
			type:'POST',
			data:{datapost : datavalue},
			success: function(result){
					$('#sell2').html(result);
			}
			
		});
	myfun2();
	}
	function myfun2(){
		var catvalue=document.getElementById('sell').value;
		var subcatvalue=document.getElementById('sell2').value;
		var url = "view.php?cat="+catvalue+"&subcat="+subcatvalue;
		document.getElementById("1").href=url;
		var url = "import.php?cat="+catvalue+"&subcat="+subcatvalue;
		document.getElementById("2").href=url;
		var url = "deleted.php?cat="+catvalue+"&subcat="+subcatvalue;
		document.getElementById("3").href=url;
	}

</script>

<div class="container">
 <a class="btn btn-outline-light btn-lg" id="1" style=" " href="" title="view">View</a>
 <a class="btn btn-outline-light btn-lg" id="2" style="margin-left: 1em;" href="" title="import">Import/Export</a> <a class="btn btn-outline-light btn-lg" id="3" style="margin-left: 1em;" href="" title="Delete">Delete</a>
               
</div></div>
</form>
    	</div>
    </div>
</body>
</html>