<!DOCTYPE HTML>
<html>
	<head>
		<title>Cake Shop | Contact</title>
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/logo.png">
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>
	<body>
	<!-- container -->
		<!-- top-header -->
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul>
						<li><a href="checkout">Checkout</a></li>
						<div class="clearfix"></div>
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
					<li><a href="products">Products</a></li>
					<li><a href="about">about</a></li>
					<li class="active"><a href="contact">Contact</a></li>
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
			<div class="content">
			<div class="container">
			<h2>Contact</h2>
			<!----start-main-content----->
			<div class="main-content">
					<!---start-contact---->
					<div class="contact">
						<div class="contact_info">
							<h3>Find Us Here</h3>
							<div class="map">
								<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
							</div>
						</div>
						<div class="section group">				
							<div class="col span_1_of_3">
      							<div class="company_address">
									<h3>Bakery Information :</h3>
									<p>500 Lorem Ipsum Dolor Sit,</p>
									<p>22-56-2-9 Sit Amet, Lorem,</p>
									<p>USA</p>
									<p>Phone: 222 666 444</p>
									<p>Fax: 000 00 00 0</p>
									<p>Email: info@cakeshop.com</span></p>
									<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
				   				</div>
							</div>				
							<div class="col span_2_of_3">
								<div class="contact-form">
									<h3>Contact Us</h3>
									<form method="post" action="contact-post.html">
										<div>
											<span><label>NAME</label></span>
											<span><input name="userName" type="text" class="textbox"></span>
										</div>
										<div>
											<span><label>E-MAIL</label></span>
											<span><input name="userEmail" type="text" class="textbox"></span>
										</div>
										<div>
											<span><label>phone</label></span>
											<span><input name="userPhone" type="text" class="textbox"></span>
										</div>
										<div>
											<span><label>SUBJECT</label></span>
											<span><textarea name="userMsg"> </textarea></span>
										</div>
										<div>
											<span><input type="submit" value="Submit"></span>
										</div>
									</form>
								</div>
  							</div>				
			  			</div>
					<!---End-contact---->
					</div>
					<div class="clear"> </div>
					<!----End-main-content----->
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
	<!-- /footer -->
	</body>
</html>

