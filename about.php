<?php

  $currentPage="About";

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>About 6G1W</title>
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
			<h1>About 6G1W</h1>
			<p>6G1W was formed in RIT's ISTE 240 class - Web 2. Our goal was to create a beautiful, easy-to-use CSS & HTML reference website.</p>
			
			<h2>Team Members</h2>
			
			<div id="about-shane" class="team-member">
			    <img class="pull-left" alt="Shane" width="150" height="150" src="images/prof.jpg">
			    <div class="info-text">
				<h3>Shane Date</h3>
				<a href="#" target="_blank">www.website.com</a>
				<p>I am a fourth year Information Technology student from Brooklyn, New York. Some of my hobbies include playing video games, playing basketball, and keeping up to date with tech news</p>
			    </div>
			</div>
			
			<div id="about-daniel" class="team-member">

			    <img class="pull-left" alt="daniel" width="150" height="150" src="images/pic.jpg">
			    <div class="info-text">
				<h3>Daniel Dorrity</h3>
				<a href="#" target="_blank">www.website.com</a>
				<p>I am a second year Information Technology student from north New Jersey. I enjoy playing video games, coding apps, and throwing a frisbee every now and again.</p>
			    </div>
			</div>
			
			<div id="about-sam" class="team-member">
			    <img class="pull-left" alt="sam" width="150" height="150" src="https://pbs.twimg.com/profile_images/378800000279639066/3d4df3e64e1add95383bdec0493f2876.jpeg">
			    <div class="info-text">
				<h3>Sam Hill</h3>
				<a href="http://www.samjhill.com" target="_blank">www.samjhill.com</a>
				<p>I'm a third-year IT student. I love skiing, web development, playing bass, and having fun.</p>
			    </div>
			</div>
			
			<div id="about-li" class="team-member">
			    <img class="pull-left" alt="li" width="150" height="150" src="images/li.jpg">
			    <div class="info-text">
				<h3>Li Liu</h3>
				<a href="#" target="_blank">www.website.com</a>
				<p>Hi, I am Li. I come from Shenzhen,China. I am a Third year IT student. I love web development, and I do film-making for fun. I love to exercise in the morning. </p>
			    </div>
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