<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		CHICKEN HOUSE
	</title>
	<?php
		echo $this->Html->meta('icon');

		#echo $this->Html->css('cake.generic');
		echo $this->Html->css('styles');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->meta('favicon.ico', '/favicon.ico');
	?>
</head>
<body>

	<div class="HeadContainer">
		<div class="HeaderBody">
			<table>
				<td>
					<span id="logo"><a href="Home"><img src="img/logo_chicken.png"/></a></span>
				</td>
				<td class="HeaderContactDetails">
				Email: Contact@ChickenHouse.in<br>
				Contact Us: 040-6521 1119<br/>
				<a href="http://www.facebook.com/chickenhousepoultry" target="_blank"><img src="img/fb_ch_logo.png"/></a>
				</td>

			</table>
			<div id="menubar">
				<ul id="menu">
					<li>
						<a href="Home">HOME</a>
					</li>
					<li>
					  <a href="Products">PRODUCTS</a>
					</li>
					<li>
						<a href="Recipes">RECIPES</a>
					</li>
					<li>
						<a href="Foodsafety">FOOD SAFETY</a>
					</li>
					<li>
						<a href="AboutUs">ABOUT US</a>
					</li>
					<li>
						<a href="ContactUs">CONTACT US</a>
					</li>
					<li>
						<a href="OurBranches">OUTLETS</a>
					</li>
				</ul>
			</div>
		</div>
	</div>


	<div class="mainbody2">	
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
	<div class="footermain">
		<div class="mainbody3">
			<div id="footer">		
				<div id="creditcards">
					<img src="img/background_image_ch.png" width="1000px;">
				</div>
				<footer>&#169; 2012 Chicken House. All rights reserved.</footer>
			</div>
		</div>
	</div>
</body>
</html>
