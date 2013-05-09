
<!DOCTYPE html>
<html lang="en">
    <head>
     <script type="text/javascript" src="js/scroll_icons.js"></script> 
 <link rel="stylesheet" type="text/css" href="css/scroll_icon.css" />
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>3D Gallery with CSS3 and jQuery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="3D Gallery with CSS3 and jQuery" />
        <meta name="keywords" content="3d, gallery, jquery, css3, auto, slideshow, navigate, mouse scroll, perspective" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
    </head>
    <body>
    
		<section id="dg-container" class="dg-container">
				<div class="dg-wrapper">
					<a href="#"><img src="img/1.jpg" alt="image01"><div>Live Birds</div></a>
					<a href="#"><img src="img/2.jpg" alt="image02"><div>Chicken With Skin</div></a>
					<a href="#"><img src="img/3.jpg" alt="image03"><div>Chicken Breasts</div></a>
					<a href="#"><img src="img/4.jpg" alt="image04"><div>http://lifeingreenville.com/</div></a>
					<a href="#"><img src="img/5.jpg" alt="image05"><div>http://circlemeetups.com/</div></a>
					<a href="#"><img src="img/6.jpg" alt="image06"><div>http://www.castirondesign.com/</div></a>
					<a href="#"><img src="img/7.jpg" alt="image07"><div>http://www.foundrycollective.com/</div></a>
					<a href="#"><img src="img/8.jpg" alt="image08"><div>http://www.mathiassterner.com/home</div></a>
					<a href="#"><img src="img/9.jpg" alt="image09"><div>http://learnlakenona.com/</div></a>
					<a href="#"><img src="img/10.jpg" alt="image10"><div>http://www.neighborhood-studio.com/</div></a>
					<a href="#"><img src="img/11.jpg" alt="image11"><div>http://www.beckindesign.com/</div></a>
					<a href="#"><img src="img/12.jpg" alt="image12"><div>http://kicksend.com/</div></a>
				</div>
				<nav>	
					<span class="dg-prev">&lt;</span>
					<span class="dg-next">&gt;</span>
				</nav>
			</section>
    	
    
		<div class="mainbody2">	
			<div id="homeline">
				<p>The <b>Akshath Poultry Traders</b> is a dynamic, forward-looking organization. Since 2006, when our poultry farming began in a small way, our commitment to quality has been unquestioned.</p>
				<p>Chicken House Broiler chicken fed with special pellet feed and grown under hygiene conditions in 40 days, which is tender and tasty, brought directly to the customers.</p>
				<p>We providing a qualitative range of Fresh Chilled & Frozen Whole Bird, Pre-Cut Whole Bird, Whole Legs, Drumsticks, Wings, Lollipops, Boneless Breast Meat and much more.</p>
				<span>We can also take Bulk Orders for Functions, Restarents, Hotels and much more.</span>
				<ul>
					<li style="list-style-image: url(img/accepted.png);">Healthy Birds grown in our own forms</li>
					<li style="list-style-image: url(img/accepted.png);">Clean and spacious Retail Outlets</li>
					<li style="list-style-image: url(img/accepted.png);">Unmatchable less price on all orders</li>
				</ul>
			</div>
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.gallery.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery();
			});
		</script>		
		
<body>
