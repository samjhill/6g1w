<?php

  $currentPage="Gallery";

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Gallery - CSS Reference by 6G1W</title>
		<link type="text/css" rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
		<link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/main.js"></script>
    </head>

    <body onload="getGallery();">		
		<?php include("navigation.php"); ?>
		
        <div id="content">
			
	    <h1>Gallery</h1>
	    
	    <div>
		<!-- for some reason, this API won't work dynamically -->
		<div style="display:inline;" onclick="location.href='http://www.dangersoffracking.com/';">
		    <script type="text/javascript" src="http://grabz.it/services/javascript.ashx?key=M2M1MDljMzhkNmJmNGQ5M2FiYzU4MDNhMjJkZWJkMjQ=&url=http://www.dangersoffracking.com/"></script>
		</div>
		
		<div style="display:inline;" onclick="location.href='http://www.fleeangrybear.com/';">
		    <script type="text/javascript" src="http://grabz.it/services/javascript.ashx?key=M2M1MDljMzhkNmJmNGQ5M2FiYzU4MDNhMjJkZWJkMjQ=&url=http://www.fleeangrybear.com/"></script>
		</div>
		
		<div style="display:inline;" onclick="location.href='http://sidigital.co/';">
		    <script type="text/javascript" src="http://grabz.it/services/javascript.ashx?key=M2M1MDljMzhkNmJmNGQ5M2FiYzU4MDNhMjJkZWJkMjQ=&url=http://sidigital.co/"></script>
		</div>
	    </div>
	    
	    <h3>Updated just now</h3>
	    <div id="gallery"></div>	  
			
			
        </div>
	    <script>
		$(".gallery-item").each( function(index, value ){
		    //grabzit api should go here but doesn't work this way
		    $(this).append('');
		});
	    </script>
	    
		
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		
    </body>
</html>