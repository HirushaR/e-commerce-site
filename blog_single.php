<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Blog_Single :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">
				<li><h4>	<?php echo (isset($_SESSION['username']))? $_SESSION['username']: "";?></h4></li>
				<li><a href="logout.php"  >Log out</a></li>
</li>

					</ul>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="home.php"><img src="images/logo.png" alt=""></a>
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="home.php">Home</a></li>
				      <li><a class="color1" href="#">Shop</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Accessories</a></li>
										<li><a href="products.php">Bags</a></li>
										<li><a href="products.php">Caps & Hats</a></li>
										<li><a href="products.php">Hoodies & Sweatshirts</a></li>
										<li><a href="products.php">Jackets & Coats</a></li>
										<li><a href="products.php">Jeans</a></li>
										<li><a href="products.php">Jewellery</a></li>
										<li><a href="products.php">Jumpers & Cardigans</a></li>
										<li><a href="products.php">Leather Jackets</a></li>
										<li><a href="products.php">Long Sleeve T-Shirts</a></li>
										<li><a href="products.php">Loungewear</a></li>
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Shirts</a></li>
										<li><a href="products.php">Shoes, Boots & Trainers</a></li>
										<li><a href="products.php">Shorts</a></li>
										<li><a href="products.php">Suits & Blazers</a></li>
										<li><a href="products.php">Sunglasses</a></li>
										<li><a href="products.php">Sweatpants</a></li>
										<li><a href="products.php">Swimwear</a></li>
										<li><a href="products.php">Trousers & Chinos</a></li>
										<li><a href="products.php">T-Shirts</a></li>
										<li><a href="products.php">Underwear & Socks</a></li>
										<li><a href="products.php">Vests</a></li>
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.php">Levis</a></li>
										<li><a href="products.php">Persol</a></li>
										<li><a href="products.php">Nike</a></li>
										<li><a href="products.php">Edwin</a></li>
										<li><a href="products.php">New Balance</a></li>
										<li><a href="products.php">Jack & Jones</a></li>
										<li><a href="products.php">Paul Smith</a></li>
										<li><a href="products.php">Ray-Ban</a></li>
										<li><a href="products.php">Wood Wood</a></li>
									</ul>
								</div>
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">	Lookbook</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Accessories</a></li>
										<li><a href="products.php">Bags</a></li>
										<li><a href="products.php">Caps & Hats</a></li>
										<li><a href="products.php">Hoodies & Sweatshirts</a></li>
										<li><a href="products.php">Jackets & Coats</a></li>
										<li><a href="products.php">Jeans</a></li>
										<li><a href="products.php">Jewellery</a></li>
										<li><a href="products.php">Jumpers & Cardigans</a></li>
										<li><a href="products.php">Leather Jackets</a></li>
										<li><a href="products.php">Long Sleeve T-Shirts</a></li>
										<li><a href="products.php">Loungewear</a></li>
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Shirts</a></li>
										<li><a href="products.php">Shoes, Boots & Trainers</a></li>
										<li><a href="products.php">Shorts</a></li>
										<li><a href="products.php">Suits & Blazers</a></li>
										<li><a href="products.php">Sunglasses</a></li>
										<li><a href="products.php">Sweatpants</a></li>
										<li><a href="products.php">Swimwear</a></li>
										<li><a href="products.php">Trousers & Chinos</a></li>
										<li><a href="products.php">T-Shirts</a></li>
										<li><a href="products.php">Underwear & Socks</a></li>
										<li><a href="products.php">Vests</a></li>
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<li><a href="products.php">Levis</a></li>
										<li><a href="products.php">Persol</a></li>
										<li><a href="products.php">Nike</a></li>
										<li><a href="products.php">Edwin</a></li>
										<li><a href="products.php">New Balance</a></li>
										<li><a href="products.php">Jack & Jones</a></li>
										<li><a href="products.php">Paul Smith</a></li>
										<li><a href="products.php">Ray-Ban</a></li>
										<li><a href="products.php">Wood Wood</a></li>
									</ul>
								</div>
							</div>
						  </div>
						</div>
			    </li>
				<li><a class="color4" href="blog.php">Blog</a></li>
				<li><a class="color6" href="contact.php">Conact</a></li>
			  </ul>
			</div>

				<div class="clearfix"> </div>
		</div>
		</div>

	</div>


<!--content-->
<div class="blog">
<div class="container">
	       <div class="blog-top">
			  <div class=" grid_3 grid-1">
					<h3><a href="blog_single.html">Lorem Ipsum is simply</a></h3>
					<a href="blog_single.php"><img src="images/blo.jpg" class="img-responsive" alt=""/></a>

					<div class="blog-poast-info">
						<ul>
							<li><a class="admin" href="#"><i> </i> Admin </a></li>
							<li><span><i class="date"> </i>12-04-2015</span></li>
							<li><a class="p-blog" href="#"><i class="comment"> </i>No Comments</a></li>
						</ul>
				    </div>
				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
					</div>
				<div class="single-bottom">

			<h3>Leave A Comment</h3>
				<form>

						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">

						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">

						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">


						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>

							<input type="submit" value="Send">

				</form>
			</div>
			  </div>
      </div>
</div>
<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">

				<div class="col-md-4 amet-sed">
				<h4>MORE INFO</h4>
				<ul class="nav-bottom">
						<li><a href="#">How to order</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.php">Location</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>
					</ul>
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>

					<p>
Contrary to popular belief</p>
					<p>The standard chunk</p>
					<p>office:  +12 34 995 0792</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>

					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Sign Up to get all news update
and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2015 New store All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
		</div>
</body>
</html>
