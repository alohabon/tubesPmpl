<!DOCTYPE HTML>
<html>
	<head>
		<title>Cake Shop | Product</title>
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/logo.png">
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="<?php echo base_url(); ?>js/jquery.easydropdown.js"></script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/etalage.css">
		<link href="<?php echo base_url(); ?>css/form.css" rel="stylesheet" type="text/css" media="all" />
		<script src="<?php echo base_url(); ?>js/jquery.easydropdown.js"></script>

		<script src="<?php echo base_url(); ?>js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul>
						<li><a href="<?php echo base_url(); ?>pembeli/checkout">Checkout</a></li>
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
					<li><a href="<?php echo base_url(); ?>pembeli">Home</a></li>
					<li class="active"><a href="<?php echo base_url(); ?>pembeli/products">products</a></li>
					<li><a href="<?php echo base_url(); ?>pembeli/about">about</a></li>
					<li><a href="<?php echo base_url(); ?>pembeli/contact">Contact</a></li>
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
	<!---start-content----->
	<div class="details">
		<div class="container">
			<div class="row single">
				<div class="col-md-9">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<ul id="etalage">
						<?php foreach ($data as $detil) {?>
								<li>
									<a href="optionallink.html">
										<img class="etalage_thumb_image" src="<?=base_url();?>images/produk/<?=$detil->kdProduk;?>.jpg" class="img-responsive"/>
										<img class="etalage_source_image" src="<?=base_url();?>images/produk/<?=$detil->kdProduk;?>.jpg" class="img-responsive" title="" />
									</a>
								</li>
						</ul>
						<div class="clearfix"></div>		
				  	</div>
					<div class="desc1 span_3_of_2">
						<h3><?=$detil->nama;?></h3>
						<p>Rp. <?=$detil->harga;?></p>
						<?php } ?>
						<div class="det_nav">
						<h4>related cakes :</h4>
						<ul>
							<?php foreach ($produk as $related) {?>	
								<li><a href="<?=base_url();?>pembeli/singlepage/<?=$related->kdProduk;?>"><img src="<?=base_url();?>images/produk/<?=$related->kdProduk;?>.jpg" class="img-responsive" alt=""/></a></li>
							<?php } ?>
						</ul>
					</div>
					<div class="det_nav1">
						<h4>Select a cake :</h4>
							<div class=" sky-form col col-4">
								<ul>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3kg</label></li>
									<li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>4kg</label></li>
									 <div class="clearfix"></div>
								</ul>
							</div>
							 <div class="clearfix"></div>
					</div>
					<div class="btn_form">
						<form method="post" action="<?=base_url();?>pembeli/buy">
							<?php foreach ($data as $buy) { ?>
							<input type="text" name="kdProduk" value="<?=$buy->kdProduk?>" hidden="">
							<input type="text" name="harga" value="<?=$buy->harga?>" hidden="">
							<label style="font-size: 18px;">QTY :   </label>
							<input type="number" name="kuantitas" style="width: 70px; height: 35px; margin-left: 10px; border:none; border-radius: 5px; padding-left: 10px; ">
							<?php } ?>
							<button type="submit" style="width: 75px; height: 35px; border-radius: 10px; background-color: #a9405c;  color: white;">BUY</button>
						</form>
					</div>
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
	       </div>
			<div class="col-md-3 single_left">
			   <div class="block block-layered-nav first">
                  <p class="block-subtitle">Shopping Options</p>
            		<dl id="narrow-by-list">
                 		<dt class="odd">Price</dt>
                    		<dd class="odd">
								<ol>
									<li>
										<a href="#"><span class="price">$100.00</span> - <span class="price">$199.99</span></a>(3)
									</li>
									<li>
										<a href="#"><span class="price">$200.00</span> - <span class="price">$299.99</span></a>(2)
									</li>
									<li>
										<a href="#"><span class="price">$300.00</span> and above</a>(1)
									</li>
								</ol>
							</dd>
						<dt class="even">Items</dt>
						<dd class="even">
							<ol>
								<li>
									<a href="#">Pineapple</a>(1)
								</li>
								<li>
									<a href="#">Black Forest</a>(1)
								</li>
								<li>
									<a href="#">Chocolate</a>(2)
								</li>
								<li>
									<a href="#">Blueberry</a>(1)
								</li>
							</ol>
						</dd>
                    	<dt class="last odd">Flavours</dt>
						<dd class="last odd">
							<ol>
								<li>
									<a href="#">Vennela</a>(2)
								</li>
								<li>
									<a href="#">Strawberry</a>(2)
								</li>
								<li>
									<a href="#">Butterscotch</a>(2)
								</li>
							</ol>
						</dd>
                	</dl>
          		</div>
			<div class="tags">
				<h4 class="tag_head">Popular cakes</h4>
				    <ul class="tags_links">
						<li><a href="#">FlowerAura</a></li>
						<li><a href="#">My Flower Tree</a></li>
						<li><a href="#">Butterscotch</a></li>
						<li><a href="#">Strawberry</a></li>
						<li><a href="#">Vennela</a></li>
						<li><a href="#">Blueberry</a></li>
						<li><a href="#">Chocolate</a></li>
						<li><a href="#">Pineapple</a></li>
					</ul>
					<a href="#" class="link1">View all tags</a>
			</div>
		</div>		   
		<div class="clearfix"></div>	
		</div>
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
	</body>
</html>

