<?php
session_start();
include_once('connection.php');
if( !isset($_SESSION["name"]))
	{
		header("location:login.php");
	}
if(isset ($_POST['submit']))
{
$name = $_POST['name'];
$desc	= $_POST['desc'];
$f_name	= $_FILES['image']['name'];
$f_tmp	= $_FILES['image']['tmp_name'];
$f_size	= $_FILES['image']['size'];
$f_extension = explode('.', $f_name); //explode() convert string into array form.
$f_extension = strtolower(end($f_extension)); // end() show the last index result of array.
$f_newfile = uniqid().'.'.$f_extension;
$store = "uploads/".$f_newfile; //store image to uploads folder , path to store images
if($f_extension == 'jpg' || $f_extension == 'png' || $f_extension == 'gif')
{
  if($f_size >= 5000000) // 1mb
  {
  	echo "<script>alert('Maxmimum file size should be more than 1Mb')</script>";
  }
   else
   {
   	if ($sql= mysqli_query($conn,"INSERT INTO product(p_name,p_image,p_desc)VALUES ('$name','$store','$desc')"))
   	{
   	if(move_uploaded_file($f_tmp, $store))
   		{
   			$_SESSION['product']= "Product Posted Successfully!";
   		}
   }
}
}
else {
	echo "<script>alert('Upload file with valid file type Like png.jpg.gif')</script>" ;
}
}				
?>
<!Doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/website.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
	<div class="row" id="msg" style="color: white;display: none;">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" >
			<h2  class="center" style="position: absolute;" ><?php  if(empty($_SESSION['product'])) {echo " ";} else echo $_SESSION['product'];  ?></h2>	
		</div>
	</div>
<div class="container">
 <!---heading---->
     <h1 > Add Product</h1><hr></hr>
	<!---Product name----> 
	<form method="post" action="" enctype="multipart/form-data">
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-2"> </div>
			     <div class="col-xs-2">
                     <label class="labell">Prduct Name:</label></div>
				<div class ="col-xs-4">	 
		             <input type="text" name="name" placeholder="Enter product name" class="form-control last margin">
                </div>
                <div class="col-xs-4"></div>
		     </div>
		 </div>
		 <br>
     <!-----I---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-2"> </div>
			     <div class="col-xs-2">
		             <label class="labell" >Prdouct Image :</label></div>
			     <div class="col-xs-4 "	>	 
			          <input type="file" name="image"  id="image" value="Insert Image" class="form-control margin choose" >
		         </div>
		         <div class="col-xs-4"></div>
		     </div>
		 </div>
		 <br>
	 <!-----Detail---->
          <div class="col-sm-12">
		         <div class="row">
				 <div class="col-xs-2"> </div>
			     <div class="col-xs-2">
		 	              <label class="labell">Description</label></div>
				  <div class="col-xs-4 ">
			             <textarea cols="40" rows="4" type="text" name="desc"  placeholder="say something about this product" class="form-control margin"></textarea>
				 </div>
				<div class="col-xs-4"></div>
          </div>
		  </div>
		  <div class="col-xs-4"> </div>
         <div class="col-sm-5 btn-submit">
		     <div class="col-sm-12 btn-submit">
		         <button name="submit" id="post" class="btn btn-submit btnn">Post</button>
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
		    	$("#msg").fadeOut(4000);
		    });
		    
		  });
	</script>
<?php
}
unset($_SESSION['product']);
?>


	 
	 