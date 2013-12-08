<?php
  $currentPage="Home";
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Home - CSS Reference by 6G1W</title>
		<link type="text/css" rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
		<link type="text/css" rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>

    <body>		
		<!--php navigation include-->
		<?php include("navigation.php"); ?>
		
        <div id="content">
			
			<h1>Start your navigation here</h1>
            
			<div id="homeNav">
				<!-- start collape line-height -->
				<div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a class="accordion-toggle homeNavItem" data-toggle="collapse" data-parent="#accordion" href="#collapsePopular">
						  <i class="fa fa-heart-o"></i> Popular</a>
						</a>
					  </h4>
					</div>
					<div id="collapsePopular" class="panel-collapse collapse">
					  <div class="panel-body">
					    <ul>
						<li>
						    <div class="popularItem" id="popular1">
							<h3><a href="dictionary.php#collapseBorder">Border</a></h3>
						    </div>
						</li>
						<li>
						    <div class="popularItem" id="popular2">
							<a href="dictionary.php#collapseColor"><h3>Color</h3></a>
						    </div>
						</li>
						<li>
						    <div class="popularItem" id="popular3">
							<a href="dictionary.php#collapseDirection"><h3>Text-Direction</h3></a>
						    </div>
						</li>
						    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapsePopular">
							Close
						    </a>
					    </ul>
					  </div>
				
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a class="accordion-toggle homeNavItem" data-toggle="collapse" data-parent="#accordion" href="#collapseNew">
						  <i class="fa fa-plus-square"></i> New</a>
						</a>
					  </h4>
					</div>
					<div id="collapseNew" class="panel-collapse collapse">
					  <div class="panel-body">
					    <ul>
						<li>
						    <div class="newItem" id="popular1">
							<a id="newLink1" href="dictionary.php#"><h3 id = "newLinkId1"></h3></a>
						    </div>
						</li>
                            <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseNew">
							Close
						    </a>
					</div>
				</div>
				<a href="dictionary.php" class="homeNavItem"><i class="fa fa-bars"></i> All</a>
			</div>
			
			
        </div>
		
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/array.js"></script>
    </body>
</html>