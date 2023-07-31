<?php
session_start();
include_once('connection.php');
if (isset($_POST['login']) && !empty($_POST['uname']) 
           && !empty($_POST['pass'])) 
{
$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "Select * from users where Username='$uname' && Password='$pass'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result))
{
while ($row = mysqli_fetch_assoc($result))
		{
			$name = $row["Name"]; 
		}
	}
	$total = mysqli_num_rows($result);

	if ($total)
	{

		header("location:dashboard.php?msg=Successfull");
				$_SESSION["name"]= $name;
				$_SESSION["msg"]= "Login Successfully!";
	}
	 else {
			header("location:login.php?msg=Username/password+is+incorrect");
		}
}
?>
<!Doctype html>
<html>
<head>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/shoppingwebsite.css">
<!------ Include the above in your HEAD tag ---------->
     <meta charset="UTF-8">
     <title>Registration Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
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
 <div class="container">
     <h1 > Sign In</h1><hr></hr>
	<form method="post" action="">
		 <div class="col-sm-12">
		     <div class="row">
			   	<div class="col-xs-2"> </div>
			     <div class="col-xs-2">
		             <label class="email labell" >User Name </label></div>
			     <div class="col-xs-4"	>	 
			          <input type="text" name="uname"  placeholder="Enter Username" class="form-control margin" >
		         </div>
		         <div class="col-xs-4"></div>
		     </div>
		 </div>
          <div class="col-sm-12">
		         <div class="row">
				 <div class="col-xs-2"> </div>
			     <div class="col-xs-2">
		 	              <label class="pass labell">Password</label></div>
				  <div class="col-xs-4">
			             <input type="password" name="pass" id="password" placeholder="Enter your Password" class="form-control margin">
				 </div>
				<div class="col-xs-4"></div>
          </div>
		  </div>

         <div class="col-sm-12 btn-submit">
         	 	<div class="col-xs-4"> </div>
		     <div class="col-sm-5 btn-submit">
		         <button type="submit" name="login" class="btn btn-submit btnn">Log In</button>
		   </div>
		 </div>
		 </form>
	 </div>	 
</div>
</body>		
</html>
	 
	 