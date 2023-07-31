<?php
include_once('1pg_connection.php');
if(isset ($_POST['submit']))
{
$email	= $_POST['email'];
$fname	= $_POST['fname'];
$lname	= $_POST['lname'];
$pass	= $_POST['pass'];
mysqli_query ($conn,"INSERT INTO users_record(Email,First_Name,Last_Name,Password) 
VALUES ('$email','$fname','$lname','$pass')");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="css/shoppingwebsite.css">
<title>Signup</title>
<link rel="shortcut icon" href="images/logo.png" />

<script type="text/javascript" href="js\pg.js">
</script>
</head>

<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 text-center">
			<p class="h1">Sign Up</p>
		</div>
	</div>
<br> <br>
<form name="myForm" action="" onsubmit="return validateForm()" method="post">
<div class="col-sm-3 col-xs-4">
	<label class=" pull-right"><b>E-mail:</b></label> 
</div> 
<div class="col-sm-6 text-center"> 
	<input class="input" type="email" placeholder="Enter Email" name="email" > 
</div>
<div class="col-sm-3">
</div>	<br/> <br/>

<div class="col-sm-3 col-xs-4">
	<label class="pull-right"><b>First Name:</b></label> 
</div> 
<div class="col-sm-6 text-center">
	<input class="input" type="text" name="fname" placeholder="Enter First_Name" > 
</div>
<div class="col-sm-3">
</div>	<br/> <br>


<div class="col-sm-3 col-xs-4">
	<label class="pull-right"><b>Last Name:</b></label> 
</div> 
<div class="col-sm-6 text-center">
	<input class="input" type="text" name="lname" placeholder="Enter Last_Name" > 
</div>
<div class="col-sm-3">
</div>	<br/> <br/>

<div class="col-sm-3 col-xs-4">
	<label class="pull-right"><b>Password:</b></label> 
</div> 
<div class="col-sm-6 text-center">
	<input class="input" type="Password" name="pass" placeholder="Enter Password" > 
</div>
<div class="col-sm-3">
</div>	<br/> <br/>

      
      <div class="col-sm-offset-3 col-sm-9 col-xs-offset-3 ">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>


<div class="col-sm-12 text-center">
	<input id="demo" name="submit" class="home-sbtn" type="submit"  value="Sign Up">
</div>

</form>
	<br> 
<div class="col-sm-12 text-center">
	<p class="font">Sign Up With:</p>
</div> 



<div class="col-sm-offset-3 col-sm-5 ">
	<a href="#twitter";>	<img id="img" class="imgg_social"  src="images\twitter.png"></a>

	<a href="#facebook";>	<img id="img" class="imgg_social"  src="images\fb.png"></a>

	<a href="#In";>	 <img id="img" class="imgg_social"  src="images\in.png"></a>

	<a href="#insta";>	<img id="img" class="imgg_social"  src="images\insta.png"></a>

	<a href="#gmail";>	<img id="img" class="imgg_social"  src="images\gmail.png"></a>

	<a href="#p";>			<img id="img" class="imgg_social"  src="images\p.png"></a>
</div>


</div>
</section>
<br> <br>
<div class="page-bg">
</div>
<script type="text/javascript">

document.getElementById("demo").addEventListener("mouseover", mouseOver);
document.getElementById("demo").addEventListener("mouseout", mouseOut);

function mouseOver() {
    var x=document.getElementById("demo")
    x.style.cursor="pointer";
    x.style.color = "red";
    x.style.height= "60px";
	x.style.width = "150px";
	x.style.color = "black";
	x.style.backgroundColor = "transparent";
	x.style.borderRadius = "10px";
	x.style.fontSize = "20px";
	x.style.transition = "background-color 1s,border-radius 1s,font-size 1s,height 1s,width 1s";
}

function mouseOut() {
    var x=document.getElementById("demo")
    x.style.color = "black";
    x.style.height= "55px";
    x.style.backgroundColor = "rgba(255, 255, 255,0.7)";
	x.style.width = "140px";
    x.style.borderRadius = "4px";
    x.style.fontSize = "18px";
    x.style.transition="height 1s,width 1s,font-Size 1s,color 1s,border-radius 1s,background-color 1s";
}
</script>
</body>
</html>
