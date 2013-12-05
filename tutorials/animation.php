<?php

  $currentPage="Tutorials";

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Animation - CSS Tutorial</title>
		<link type="text/css" rel="stylesheet" href="../assets/font-awesome/css/font-awesome.css" />
		<link type="text/css" rel="stylesheet" href="../assets/prettify.css" />
		<link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="../css/style.css"/>
		<script>
			function submit(){
				alert("hey");
			}
		</script>
	</head>
    <body>	
		<!--php navigation include-->
		<?php include("../navigation_level2.php"); ?>
		
		<div id="content">
		<h3><a href="../tutorials.php">< back</a></h3>
		<h3>Make It Dance- Animation</h3>

<h3>Animation</h3>
	<p>Animation within CSS is a very helpful tool, however, is not something that is needed within all sites. It allows you to make animated portions of a site without using animated images or Flash, both of which can drastically increase the amount of time a website loads. Warning: To fully utilize these within Chrome a Safari, you must use the webkit, which will be mentioned later. Internet Explorer, Firefox, and Opera all support it.</p>
	<p>In order to utilize an animation, you must declare a keyframe that tells the animation what you want to accomplish. The keyframe is declare like so:</p>

<pre class = "prettyprint">
@-webkit-keyframe name{
    from/to {};
    % {};
}

div
{
    animation: name;
}
</pre>

<p>There are a few things going on here that we need to address. First, the -webkit- is used when coding for Chrome or Safari. If you are just coding for IE, Safari, or Opera, you are allowed to ignore this and just put @keyframe (when coding for Chrome and Safari, the -webkit- keyframe needs to be separate from the one for IE, Safari and Opera). The name here refers to the name you want to set this animation to. Now for what actual will become our animation. The from/to and the % are what will control the animation. The from/to can only be used with each other, and will cause something to gradually become something else. For instance, you can have one color gradually become another by declaring it as:</p>

<pre class = "prettyprint">
from {background: blue;}
to {background: red;}
</pre>

<p>This will gradually change the div to from blue to red. Any other properties can be applied within the from/to, and the animation will be applied. 
	Now for the %. This allows us to control the change even more so, through the use of controlling at what percentage during the animation it changes. The most common percentages to use are multiples of 25(0, 25, 50, 75, 100). As the animation moves through itself, it will do whatever is told within each percentage tag at that moment of the animation:</p>		

<pre class = "prettyprint">
0% {background: red;}
25% {background: orange;}
50% {background: blue;}
75% {background: black;}
100% {background: white;}
</pre>

<p>This will cause the div to automatically change from red to white, making sure to change into the necessary color at the appropriate percentage. 
	Now, there are several other properties that animation calls as a shorthand, however we won’t go into detail about all of the properties within this tutorial; we will only go into detail about the ones we feel are the most useful, which are the following:

<pre class = "prettyprint">div{
    animation-name: name;
    animation-duration: time;
    animation-iteration-count: number;
    animation-direction: type;
}
</pre>

<p>From top to bottom we have animation-name, which allows us to call the animation specified in the @keyframe that we want to use. The time for animation-duration allows us to specify how long we want the animation to run for, which can be any number in terms of either seconds (s) or milliseconds (ms) (by default it is set to 0). The number for animation-iteration-count allows us to specify how many times we want the animation to repeat itself before stopping, even allowing it to run an infinite amount of times (default is set to 1). The type for animation-direction allows us to specify whether we want the animation to play out how it normally should, called by normal, in reverse, called by reverse, or alternating between the two, called alternate. </p>
	<p>Animations are useful for your site in terms of adding new dynamics, especially if you are unfamiliar with Flash or JavaScript. </p>

        <h3><a href="../tutorials.php">< back to Tutorials</a></h3>
	
	<h3><a href="../quizzes/animation.php"> Animations Quiz</a></h3>
	
	</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
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