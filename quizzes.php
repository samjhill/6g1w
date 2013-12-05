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
		<div class="navbar">
		    <div class="navbar-inner">
		      <a class="brand" href="#">6G1W</a>
		      <ul class="nav">
			<li><a href="index.html"><i class="fa fa-home fa-fw"></i> Home</a></li>
			<li><a href="dictionary.html"><i class="fa fa-book fa-fw"></i> Dictionary</a></li>
			<li><a href="tutorials.html"><i class="fa fa-pencil-square fa-fw"></i> Tutorials</a></li>
			<li class="active"><a href="quizzes.html"><i class="fa fa-question fa-fw"></i> Quizzes</a></li>
			<li><a href="about.html"><i class="fa fa-group fa-fw"></i> About</a></li>
		      </ul>
		    </div>
		</div>
		
		<div id="content">
			<h1>Quizzes</h1>
			<div id="box-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/box.html">Box</a></h4>
			    <p>Some interesting text about taking a quiz on boxes goes here.</p>
			</div>
			
			<div id="border-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/border-outline.html">Border & Outline</a></h4>
			    <p>Some interesting text about taking a quiz on borders goes here.</p>
			</div>
			
			<div id="text-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/text.html">Text Properties</a></h4>
			    <p>Some interesting text about taking a quiz on text properties goes here.</p>
			</div>
			
			<div id="width-height-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/width-height.html">Width & Height Properties</a></h4>
			    <p>Some interesting text about taking a quiz on width & height properties goes here.</p>
			</div>
			
			<div id="animation-quiz" class="quiz tutorial">
			    <h4><a href="quizzes/animation.html">Animation Properties</a></h4>
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