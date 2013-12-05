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
		<?php include("navigation.php"); ?>
		
		<!--
		<div class="navbar">
		    <div class="navbar-inner">
		      <a class="brand" href="#">6G1W</a>
		      <ul class="nav">
			<li class="active"><a href="index.html"><i class="fa fa-home fa-fw"></i> Home</a></li>
			<li><a href="dictionary.html"><i class="fa fa-book fa-fw"></i> Dictionary</a></li>
			<li><a href="tutorials.html"><i class="fa fa-pencil-square fa-fw"></i> Tutorials</a></li>
			<li><a href="quizzes.html"><i class="fa fa-question fa-fw"></i> Quizzes</a></li>
			<li><a href="about.html"><i class="fa fa-group fa-fw"></i> About</a></li>
		      </ul>
		    </div>
		</div> -->
		
        <div id="content">
			
			
			<h1>Start your navigation here</h1>
            
			<div id="homeNav">
			    <ul>
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
							<a href="dictionary.html#collapseBorder"><h3>Border</h3></a>
						    </div>
						</li>
						<li>
						    <div class="popularItem" id="popular2">
							<a href="dictionary.html#collapseColor"><h3>Color</h3></a>
						    </div>
						</li>
						<li>
						    <div class="popularItem" id="popular3">
							<a href="dictionary.html#collapseDirection"><h3>Text-Direction</h3></a>
						    </div>
						</li>
						    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapsePopular">
							Close
						    </a>
					    </ul>
					  </div>
				
					</div>
				</div>
				<li><a href="" class="homeNavItem"><i class="fa fa-plus-square"></i> New</a></li>
				<li><a href="dictionary.html" class="homeNavItem"><i class="fa fa-bars"></i> All</a></li>
			    </ul>
			</div>
			
			
        </div>
		
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>