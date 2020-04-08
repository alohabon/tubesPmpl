<!DOCTYPE HTML>
<?php
	if($this->session->flashdata('data') != NULL){
		echo "<script>alert('Selamat! Pemesanan anda berhasil. Kode transaksi : ".$this->session->flashdata('data')."');</script>";
	}
 ?>
<html>
	<head>
		<title>Cake Shop | Products</title>
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/logo.png">
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul>
						<li><a href="checkout">Checkout</a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
				<div class="top-header-center">
					<?php foreach($cart as $cart) {?>
					<p><span class="cart"> </span>Cart<label><?=$cart->cart?></label></p>
					<?php } ?>
				</div>
				<div class="clearfix"> </div>
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
					<li class="active"><a href="products">Products</a></li>
					<li><a href="about">about</a></li>
					<li><a href="contact">Contact</a></li>
					<div class="clearfix"> </div>
					
				</ul>
			</div>	
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
				<!-- logo -->
				<div class="logo">
					<a href="home"><img src="<?php echo base_url(); ?>images/logo.png" title="Sweetcake" /></a>
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
	<!-- service -->
<div class="biseller-info">
<div class="container">
<h2>Products</h2>
<h3 class="new-models">new varieties</h3>
			<ul id="flexiselDemo3">
				<?php foreach ($produk as $data) {?>
				<li>
					<div class="biseller-column">
					<img src="<?=base_url();?>images/produk/<?=$data->kdProduk;?>.jpg" alt="" class="veiw-img">
						<div class="veiw-img-mark">
							<a href="<?=base_url();?>pembeli/singlepage/<?=$data->kdProduk;?>">Quick view</a>
						</div>
					<div class="biseller-name">
						<h4><?=$data->nama;?></h4>
						<p><?=$data->harga;?></p>
					</div>
						<a href="<?=base_url();?>pembeli/singlepage/<?=$data->kdProduk;?>"><button class="add2cart">
						    <span>| Add to Cart</span>
						</button></a>					
					</div>
				</li>
				<?php }?>
	     	</ul>
			</div>
		</div>	

			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: false,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.flexisel.js"></script>
			
				<div class="best-seller">
				<div class="container">
					<div class="biseller-info">
					 <h3 class="new-models">varieties</h3>
					<ul id="flexiselDemo1">
						<?php foreach ($produk as $data) {?>
							<li>
								<div class="biseller-column">
								<img src="<?=base_url();?>images/produk/<?=$data->kdProduk;?>.jpg" alt="" class="veiw-img">
									<div class="veiw-img-mark">
										<a href="<?=base_url();?>pembeli/singlepage/<?=$data->kdProduk;?>">Quick view</a>
									</div>
								<div class="biseller-name">
									<h4><?=$data->nama;?></h4>
									<p><?=$data->harga;?></p>
								</div>
									<a href="<?=base_url();?>pembeli/singlepage/<?=$data->kdProduk;?>"><button class="add2cart">
										<span>| Add to Cart</span>
									</button></a>					
								</div>
							</li>
						<?php }?>
			     	</ul>
					</div>
			</div>
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			<div class="clearfix"></div>
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-bottom">
					<p><center>Copyright © 2018 CakeShop.com All Right Reserved</center></p>
			</div>
		</div>
	</div>
	<!-- /footer -->
	<!-- /footer -->
	</body>
</html>

