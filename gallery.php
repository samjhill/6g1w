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
	</head>

    <body>		
		<?php include("navigation.php"); ?>
		
        <div id="content">
			
	    <h1>Gallery</h1>
            <button onclick="getGallery('apple');">test</button>
	    <div id="gallery"></div>	  
			
			
        </div>
		<script src="js/main.js"></script>
		<script>
		    $.ajax({
		    type: "GET",
		    url: "php/proxy.php?search=" + search,
		    dataType: "json",
		    success: parseJson
		 });
		
		
		</script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>