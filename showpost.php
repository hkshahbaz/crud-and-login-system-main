<?php 
session_start();
include_once('connection.php');
if( !isset($_SESSION["name"]))
	{
		header("location:login.php");

	}

$sql= "select * from product ORDER BY p_id ";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laptops & Computers</title>
	<link rel="icon" type="image/png" href="logo.png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/shoppingwebsite.css">
	<link rel="stylesheet" type="text/css" href="css/select_p.css">
			<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row" id="msg" style="color: white; display: none">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" >
			<h2  class="center" style="position: absolute;margin-bottom: 20px;" >
				<?php  if(empty($_SESSION['product'])) {echo " ";} else echo $_SESSION['product'];  ?>
			</h2>	
		</div>
	</div>
<section class="container-fluid margin" style="margin-top: 65px;">
	</div>
		<?php
if (mysqli_num_rows($result)>0)
{	?>
		<table class="table " style="width: 60%;margin-left: 15%">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Product Name</th>
		      <th scope="col">Product Image</th>
		      <th scope="col">Product Description</th>
		      <th class="center" scope="col" colspan="2">Action</th>
		    </tr>
		  </thead>
		  <tbody style="background-color: white;opacity: 0.95;font-size: 20px; ">
		  	 <?php
	while ($row = mysqli_fetch_assoc($result))
		{	
		?>
		    <tr>
			     <td id="td"> <?php echo		$row["p_id"]; 		?></td>
			     <td> <?php echo		$row["p_name"]; 	?></td>
			     <td>
			     	<button type="button" class="btn order_now" data-toggle="modal" data-target="#myModal">
			     	<img width="150px" height="150px" src="<?php echo	$row["p_image"]; ?>">
			     	</button> 
			     	</td>
			     <td> <?php echo		$row["p_desc"]; 	?></td>
			     <td> <a href='delete.php?id=<?php echo $row["p_id"];?>' >Delete</a></td>
				<td><a href='editproduct.php?id=<?php echo $row["p_id"] ?>'>Edit</a></td>
		    </tr>
		    <?php
		}
}
?>
		  </tbody>
		</table>
	</section>
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
