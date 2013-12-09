<?php
  $currentPage="Home";
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Home - CSS Reference by 6G1W</title>
		<link rel="shortcut icon" href="images/favicon.ico" />
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
						  <i class="fa fa-heart-o"></i> Popular
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
							<h3><a href="dictionary.php#collapseColor">Color</a></h3>
						    </div>
						</li>
						<li>
						    <div class="popularItem" id="popular3">
							<h3><a href="dictionary.php#collapseDirection">Text-Direction</a></h3>
						    </div>
						</li>
					     </ul>
						    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapsePopular">
							Close
						    </a>
					    
					  </div>
				
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
						<a class="accordion-toggle homeNavItem" data-toggle="collapse" data-parent="#accordion" href="#collapseNew">
						  <i class="fa fa-plus-square"></i> New
						</a>
					  </h4>
					</div>
					<div id="collapseNew" class="panel-collapse collapse">
					  <div class="panel-body">
					    <ul>
						<li>
						    <div class="newItem" id="new1">
							<h3 id = "newLinkId1"><a id="newLink1" href=""></a></h3>
						    </div>
						</li>
					    </ul>
					  <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseNew">
					    Close
					  </a>
					    
					  </div>
					</div>
					
				<a href="dictionary.php" class="homeNavItem"><i class="fa fa-bars"></i> All</a>
				</div>
				
				<img src="images/logo.png" alt="logo" class="pull-right"></img>
			</div>
			
        </div>
		
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="js/array.js"></script>
    </body>
</html>