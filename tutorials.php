<?php

  $currentPage="Tutorials";

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Tutorials - CSS Reference by 6G1W</title>
		<link type="text/css" rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
		<link type="text/css" rel="stylesheet" href="assets/prettify.css" />
		<link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<script>
			function submit(){
				alert("hey");
			}
		</script>
	</head>
    <body>	
		<!--php navigation include-->
		<?php include("navigation.php"); ?>
		
		<div id="content">
			<h1>Tutorials</h1>
			<div id="basic-css-tutorial" class="tutorial">
			    <h4><a href="tutorials/basic-css.php">Basic CSS</a></h4>
			    <p> Learn how to call the different types of CSS files, properties and how to format CSS for further readability. This starting tutorial is a great place for anyone with no experience with CSS.</p>
			</div>
			
			<div id="text-tutorial" class="tutorial">
			    <h4><a href="tutorials/text.php">Text</a></h4>
			    <p>The foundation of any HTML page, this tutorial gives an overview of some of the different ways to modify text, such as changing its color, alignment, font and much more. These changes can help make your site easier for users to read, and much more friendly to visit. </p>
			</div>
			
			<div id="borders-tutorial" class="tutorial">
			    <h4><a href="tutorials/borders.php">Borders & Backgrounds</a></h4>
			    <p>Depth and creativity can both be expressed through the uses of different borders and backgrounds. In this tutorial you will learn how to call the different types of borders and backgrounds, using colors or images, to give your site a feeling of exclusiveness from other sites of the same nature.</p>
			</div>
			
			<div id="animation-tutorial" class="tutorial">
			    <h4><a href="tutorials/animation.php">Animation</a></h4>
			    <p>Learn how to make your HTML dance with the animation property here. This tutorial focuses on giving you an understanding of how to call and manipulate the various animation properties in order to give your site some movement in order to attract the eyes of your user.</p>
			</div>
			
			<div id="navigation-tutorial" class="tutorial">
			    <h4><a href="tutorials/navigation.php">Navigation</a></h4>
			    <p>Global and submenu navigation are key elements in any multi-page website. In this tutorial, you can learn how to make your very own basic vertical navigation bar, and try your hand at our challenge.</p>
			</div>
			
			
			
        </div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
		<script>
		    !function ($) {
		      $(function(){
			window.prettyPrint && prettyPrint()   
		      })
		    }(window.jQuery)
		</script>
    </body>
</html>