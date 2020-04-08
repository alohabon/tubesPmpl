<!DOCTYPE HTML>
<html>
	<head>
		<title>Cake Shop | Checkout</title>
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/logo.png">
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="<?php echo base_url(); ?>js/jquery.easydropdown.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
			
			</div>
		</div>
		<!-- /top-header -->
		<!-- main-menu -->
		<div class="main-menu">
			<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
				<ul>
						<li><a href="home">Home</a></li>
						<li><a href="products">Products</a></li>
						<li><a href="about">about</a></li>
						<li><a href="contact">Contact</a></li>
						<div class="clearfix"> </div>
				</ul>
			</div>	
				

				<!-- logo -->
				<div class="logo">
					<a href="home"><img src="<?php echo base_url(); ?>images/logo.png" title="Sweetcake" /></a>
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
	<!---start-content----->
	<div class="check-out">
			<div class="container">
				<center><h3 class="title ">Method Payment</h3></center>
				<div class="" style="padding-bottom: 5px; padding-top: 50px;">
					 <div class="row">
					   <div class="col-sd-12">
						 <form class="form-group col-sm-12" method="post" action="bayar">
						   <div class="form-group col-sm-4"> <input type="text" class="form-control" name="nama" placeholder="First Name" style="" required> </div>				
						   <div class="form-group col-sm-4"> <input type="email" class="form-control" name="email" placeholder="Email" required> </div>
						   <div class="form-group col-sm-4"> <input type="number" class="form-control" name="noTlp" placeholder="Phone" required> </div>
						   <div class="form-group col-sm-10"> <input type="ntext" class="form-control" name="alamat" placeholder="Address"required> </div>
						   <div class="form-group col-sm-2"><input type="number" class="form-control" name="kdPos" placeholder="Postal code" required></div> 
						
					   </div>
					</div>
			   </div>
			   <div class="d-flex justify-content-end">
				   	<center><p>Sub Total :
					   	<?php foreach($cart as $sub) {?>
						<?=$sub->cart?>
						<?php } ?>
					</p></center>
			   </div>
			   <div class="d-flex justify-content-end"><center><button type="submit" class="btn-pink">Checkout</button></center></div>
			   </form>
			   <p class="cart">You have no items in your shopping cart.<br>Click<a href="products"> here</a> to continue shopping</p>
			   </div>
		   </div>
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-bottom">
				<p><center>Copyright © 2018 CakeShop.com All Right Reserved</center></p>
			</div>
		</div>
	</div>
<!-- /footer -->
	</body>
</html>

