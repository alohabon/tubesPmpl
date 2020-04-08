<!DOCTYPE HTML>
<?php
	if($this->session->flashdata('cari') != NULL){
		echo "<script>alert('".$this->session->flashdata('cari')."');</script>";
	}
 ?>
<html>
	<head>
		<title>Cake Shop | Home</title>
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/logo.png">
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
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
					<li class="active"><a href="home">Home</a></li>
					<li><a href="products">Products</a></li>
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
					<a href="home" ><img src="<?php echo base_url(); ?>images/logo.png" title="Sweetcake" /></a>
				</div>
				<!-- logo -->
			</div>
		</div>
		<!-- /main-menu -->
		<!-- banner -->
		<div class="container">
				<div class="img-slider">
						<!----start-slider-script---->
					<script src="<?php echo base_url(); ?>js/responsiveslides.min.js"></script>
					 <script>
					    // You can also use "$(window).load(function() {"
					    $(function () {
					      // Slideshow 4
					      $("#slider4").responsiveSlides({
					        auto: true,
					        pager: true,
					        nav: true,
					        speed: 500,
					        namespace: "callbacks",
					        before: function () {
					          $('.events').append("<li>before event fired.</li>");
					        },
					        after: function () {
					          $('.events').append("<li>after event fired.</li>");
					        }
					      });
					
					    });
					  </script>
					<!----//End-slider-script---->
					<!-- Slideshow 4 -->
					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img  src="<?php echo base_url(); ?>images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	<a class="buy-btn" href="products">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="<?php echo base_url(); ?>images/11.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					         <li>
					          <img  src="<?php echo base_url(); ?>images/slide.jpg" class="img-responsive" alt="">
					          <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	<a class="buy-btn" href="products">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="<?php echo base_url(); ?>images/iteam.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					        <li>
					          <img src="<?php echo base_url(); ?>images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					          	 <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	<a class="buy-btn" href="products">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="<?php echo base_url(); ?>images/12.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					        <li>
					          <img src="<?php echo base_url(); ?>images/slide.jpg" class="img-responsive" alt="">
					           <div class="slider-caption">
					            <div class="slider-caption-left text-center">
					          	 	<h1>ARE YOU LOOKING FOR SWEET, STYLISH AND DELECIOUS BIRTHDAY CAKES?</h1>
					          	 	<p>DON'T WORRY, WE CAN HELP YOU! CHECK OUR BEST CAKE SECTION.</p>
					          	 	<a class="buy-btn" href="products">Buy Now</a>
					          	 </div>
					          	  <div class="slider-caption-right">
					          	  	<a href="#"><img src="<?php echo base_url(); ?>images/13.png" class="img-responsive" title="name" /></a>
					          	  </div>
					          	  <div class="clearfix"> </div>
					          </div>
					           <!-- share-on -->
					          <div class="share-on">
					          	<div class="share-on-grid">
					          		<div class="share-on-grid-left">
					          			<h3>Share On</h3>
					          		</div>
					          		<div class="share-on-grid-right">
					          			<a href="#"><span class="facebook"> </span></a>
					          			<a href="#"><span class="twitter"> </span></a>
					          			<div class="clearfix"> </div>
					          		</div>
					          		<div class="clearfix"> </div>
					          	</div>
					          	<div class="clearfix"> </div>
					          </div>
					          <!-- share-on -->
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>
					</div>
					<div>
						<center>
							<form action="cari" method="post" >
								<input type="text" name="cari" placeholder="Masukkan kode transaksi" style="border: none; width: 250px; height: 35px; border-radius: 5px; padding-left: 20px;">	
								<button type="submit" class="btn" style="width: 75px; height: 35px; border-radius: 10px; background-color: #a9405c;  color: white;">Cari</button>
							</form>
						</center>
					</div><br>
		<!-- /banner -->
		</div>
	<!-- /container -->
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

