<?php

  $currentPage="Quizzes";

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Quizzes - CSS Reference by 6G1W</title>
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
			<h1>Quizzes</h1>
			<div id="box-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/box.php">Box</a></h4>
			    <p>Some interesting text about taking a quiz on boxes goes here.</p>
			</div>
			
			<div id="border-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/border-outline.php">Border & Outline</a></h4>
			    <p>Some interesting text about taking a quiz on borders goes here.</p>
			</div>
			
			<div id="text-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/text.php">Text Properties</a></h4>
			    <p>Some interesting text about taking a quiz on text properties goes here.</p>
			</div>
			
			<div id="width-height-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/width-height.php">Width & Height Properties</a></h4>
			    <p>Some interesting text about taking a quiz on width & height properties goes here.</p>
			</div>
			
			<div id="animation-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/animation.php">Animation Properties</a></h4>
			    <p>Some interesting text about taking a quiz on animation properties goes here.</p>
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