<?php
session_start();
include_once('connection.php');
if( isset($_SESSION["name"]))
	{
		header("location:dashboard.php");
	}
if(isset ($_POST['submit']))
{
$name	= $_POST['name'];
$uname	= $_POST['uname'];
$email	= $_POST['email'];
$pass	= $_POST['pass'];

$select = "Select * from users where Username='$uname'";
$result = mysqli_query($conn, $select);
	$total = mysqli_num_rows($result);

	if (!$total)
	{	
	$query = "INSERT INTO users(Name,Username,Email,Password) VALUES('$name','$uname','$email','$pass')";
	$sql= mysqli_query($conn,$query);
		if($sql)
			{
				$_SESSION['product']= "Registered Successfully!";
			}	
	}
	 else
	 {
	 echo "<script>alert('Username Already exists!')</script>";
	 }		
}
?>
<!Doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/website.css">
	<link rel="stylesheet" type="text/css" href="css/select_p.css">
				<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.labell{
			font-size: 18px;
			color: white;
			float: right;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.margin{
			margin-bottom: 10px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="row" id="msg" style="color: white; margin-left: 35%;display: none;">
		<div style="width: 40%; margin-top: 30px;"  >
			<h2  class="center" style="position: absolute;" >
				<?php  if(empty($_SESSION['product'])) {echo " ";} else echo $_SESSION['product']; ?>
			</h2>
		</div>
	</div>
 <div class="container" ">
 <!---heading---->
     <h1 > Sign Up</h1><hr></hr>
	<!---Form starting----> 
	<form method="post" action="">
         <div class="col-sm-12">
		     <div class="row">
		     	<div class="col-xs-2"> </div>
			     <div class="col-xs-2">
                     <label class="labell">Name </label></div>
				<div class ="col-xs-4">	 
		             <input type="text" name="name"  placeholder="Enter your Full Name" class="form-control last margin">
                </div>
                <div class="col-xs-4"></div>
		     </div>
		 </div>
		 <div class="row"></div>
		 <br>
		<!-----USername---->
		<div class="col-sm-12">
		     <div class="row">
		     	<div class="col-xs-2"> </div>
			     <div class="col-xs-2">
                     <label class="labell">User Name </label></div>
				<div class ="col-xs-4">	 
		             <input type="text" name="uname"  placeholder="Enter your Username" class="form-control last margin">
                </div>
                <div class="col-xs-4"></div>
		     </div>
		 </div>
		 <div class="row"></div>
		 <br>
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-3"> </div>
			     <div class="col-xs-1">
		             <label class="labell" >Email </label></div>
			     <div class="col-xs-4"	>	 
			          <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control margin" >
		         </div>
		         <div class="col-xs-4"></div>
		     </div>
		 </div>
		 <br>
          <div class="col-sm-12">
		         <div class="row">
				 <div class="col-xs-3"> </div>
			     <div class="col-xs-1">
		 	              <label class="labell">Password </label></div>
				  <div class="col-xs-4">
			             <input type="password" name="pass" id="password" placeholder="Enter your Password" class="form-control margin">
				 </div>
				<div class="col-xs-4"></div>
          </div>
		  </div>
		  <div class="col-xs-4"> </div>
         <div class="col-sm-7 btn-submit">
		     <div class="col-sm-12 btn-submit">
		         <button name="submit" class="btn btn-submit btnn">Register</button>
		   </div>
		 </div>
		 </form>
	 </div>	 
</div>
</body>		
</html>
<?php 
if(!empty($_SESSION['product']))
{
?>
	<script>
		$(document).ready(function(){
		    $("#msg").fadeIn(3000,function(){
		    	$("#msg").fadeOut(2000);
		    });
		    
		  });
	</script>
<?php

 unset($_SESSION['product']);
}
?>
	 
	 