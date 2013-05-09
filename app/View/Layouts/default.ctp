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
					<span id="logo"><a href="Home"><img src="img/logo.png"/></a></span>
				</td>
				<td class="headertable2">
				Email: chickenhouse@rediffmail.com<br>
				Contact Us: 040-6521 1119
				</td>
			</table>
			<div id="menubar">
				<ul id="menu">
					<li>
						<a href="Home">Home</a>
					</li>
					<li>
					  <a href="Products">Products</a>
					</li>
					<li>
						<a href="AboutUs">About Us</a>
					</li>
					<li>
						<a href="ContactUs">ContactUs</a>
					</li>
					<li>
						<a href="OurBranches">OurBranches</a>
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
