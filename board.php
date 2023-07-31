<?php
session_start();
include_once('connection.php');
if( !isset($_SESSION["name"]))
	{
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/website.css">
</head>
<body>
	<div class="container">
		<div class="col-sm-3"></div>
		<div class="col-sm-5">
			<h2 style="color: white;margin-left: 25px;">Welcome <?php echo $_SESSION['name']; ?></h2>
		</div>
		<div class="col-sm-4"></div>
	</div>
	<div class="row" id="msg" style="color: white;display: none;">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" >
		<h2  class="center" style="position: absolute;" >
			<?php  if(empty($_SESSION['msg'])) {echo " ";} else echo $_SESSION['msg'];  ?></h2>	
		</div>
	</div>
	<div class="contain" >
			<div class="col-sm-12">
				<a href="addpost.php" class="btn btn-success btnn">Add Post</a>
			</div>
			<div class="col-sm-12">
				<a href="selectpost.php" class="btn btn-primary btnn">Show Post</a>
			</div>
			<div class="row"></div>
	</div>
</body>
</html>
<?php 
if(!empty($_SESSION['msg']))
{
?>
	<script>
		$(document).ready(function(){
		    $("#msg").fadeIn(3000,function(){
		    	$("#msg").fadeOut(3000);
		    });
		    
		  });
	</script>
<?php
}
unset($_SESSION['msg']);
?>