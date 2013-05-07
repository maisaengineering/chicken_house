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
	?>
</head>
<body>

	<div class="main">
		<div class="mainbody">
			<table>
				<td>
					<span id="logo"><img src="img/logo.png"/></span>
				</td>
				<td class="headertable2">
				Working Hours: 24x7/365 days<br>
				Contact Us: 040-64627227
				<div class="likebuttons">
						<div class="addthis_toolbox addthis_default_style ">
							<div id="facebook"><a class="addthis_button_facebook_like" addthis:url="http://localhost/chicken_house/"></a></div>
							<div id="tweet"><a class="addthis_button_tweet" addthis:url="http://localhost/chicken_house/"></a></div>
							<div id="share"><a class="addthis_counter addthis_pill_style" addthis:url="http://localhost/chicken_house/"></a></div>
						</div>
						<script type="text/javascript" src="js/likebuttons.js"></script>
				</div>
				</td>
			</table>
			<div id="menubar">
				<ul id="menu">
					<li>
						<a href="Home"><span class="menuselected">Home</span></a>
					</li>
					<li>
						<a href="AboutUs">About Us</a>
					</li>
					<li>
						<a href="ContactUs">Order Here</a>
					</li>
					<li>
						<a href="Locations">Locations</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>

	<div class="footermain">
		<div class="mainbody3">
			<div id="footer">		
				<div id="creditcards">
					<img src="img/creditcards1.png" height="50px;">
				</div>
				<footer>&#169; 2012 Chicken House. All rights reserved.</footer>
			</div>
		</div>
	</div>
</body>
</html>
