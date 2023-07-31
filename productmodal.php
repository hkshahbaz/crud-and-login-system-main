<?php 
include_once('connection.php');
$sql= "select * from product ORDER BY p_id";
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
		<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<section class="container-fluid section">
		<div class="row margin_top_gallary">
			<div class="col-sm-1"></div>
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#" class="link">
						<?php if(mysqli_num_rows($result)>0)
						{
							while ($row = mysqli_fetch_array($result))
		 	{
						?>
						<img src="<?php echo $row['p_image']; 	?>" class="imgg">
						<div class="caption">
							<p> <?php echo		$row["p_name"]; 	?></p>
							
							<button type="button" class="btn order_now" data-toggle="modal" data-target="#myModal">Order Now</button>

							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog modal-md">
									<div class="modal-content">
										<div class="modal-header">
											<h3>Laptops & Computers</h3>
										</div>
										<div class="modal-body">
											<h4><?php echo		$row["p_name"]; 	?></h4>
											<img src="<?php echo $row['p_image']; 	?>" class="imgg">
											<br>
											<p><?php echo		$row["p_desc"]; 	?></p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-success add_cart">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<?php echo "<br>" ;}} ?>
				</div>
				<?php echo "<br>" ; ?>
			</div>
			<!--
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#"  class="link">
						<img src="images/laptop3.jpg" class="imgg ">
						<div class="caption">
							<p> Core i7 400gb ram 3gb</p>
							<button class="btn order_now">Order Now</button>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#" class="link">
						<img src="images/laptop7.jpg" class="imgg ">
						<div class="caption">
							<p> Core i7 400gb ram 3gb</p>
							<button class="btn order_now">Order Now</button>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row margin_top_gallary">
			<div class="col-sm-1"></div>
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#"  class="link">
						<img src="images/laptop8.jpg" class="imgg ">
						<div class="caption">
							<p> Core i7 400gb ram 3gb</p>
							<button class="btn order_now">Order Now</button>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#"  class="link">
						<img src="images/laptop9.jpg" class="imgg ">
						<div class="caption">
							<p> Core i7 400gb ram 3gb</p>
							<button class="btn order_now">Order Now</button>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#"  class="link">
						<img src="images/laptop10.jpg" class="imgg ">
						<div class="caption">
							<p> Core i7 400gb ram 3gb</p>
							<button class="btn order_now">Order Now</button>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="row margin_top_gallary">
			<div class="col-sm-1"></div>
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#"  class="link">
						<img src="images/laptop4.jpg" class="imgg ">
						<div class="caption">
							<p> Core i7 400gb ram 3gb</p>
							<button class="btn order_now">Order Now</button>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#"  class="link">
						<img src="images/laptop5.jpg" class="imgg ">
						<div class="caption">
							<p> Core i7 400gb ram 3gb</p>
							<button class="btn order_now">Order Now</button>
						</div>
					</a>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="img-thumbnail">
					<a href="#"  class="link">
						<img src="images/laptop6.jpg" class="imgg ">
						<div class="caption">
							<p> Core i7 400gb ram 3gb</p>
							<button class="btn order_now">Order Now</button>
						</div>
					</a>
				</div>
			</div>
		</div> -->
	</section>
</body>
</html>