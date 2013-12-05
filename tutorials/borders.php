<?php

  $currentPage="Tutorials";

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Borders and Backgrounds - CSS Tutorial</title>
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
		<h1>Adding Depth and Uniqueness</h1>
		<h2>Borders and Backgrounds</h2>
<p>Within CSS, there are various properties that can help you to make various items more unique to the look of the site. There are properties that allow you to change a border to any image you want, and same for the background.</p>

<h3>Background:</h3>
	<p>There are several things you can do with a background that do not involve just changing the color. You can add your own image, resize these images, or even overlap to create one constant flowing background. </p>
	<p>Adding a background image is very simple because CSS has two properties that we can use to both add the image, and resize it once we have it loaded: </p>

<pre class = "prettyprint">
background: url(image url);
background-size: percent/em/px size;
</pre>

<p>The url(image url) will take the image from the given url and set the size of it using the values given for background-size. But what if you want this image to constantly be on the background for the extent of the page, then you can use the background-repeat property:</p>

<pre class = "prettyprint">
background-repeat: (no-repeat/repeat/repeat-x/repeat-y/inherit);
</pre>

<p>Depending on the specified value, the background will repeat both horizontally and vertically, just on the horizontal, just on the vertical, or not at all. 
	Now this is nice, but what if you have two images that you want to overlap, and can’t get to an editor and manually overlap them? In this case, you can just use the background property as follows:</p>

<pre class = "prettyprint">background: url(image), url(image);</pre>

<p>This can be done for multiple images, and the images will be overlapped as if they were a normal background image. </p>

<h3>Border:</h3>
	<p>Now that we have our background all nice and fancy, it’s time to add some depth to our webpage, and we can do this through the use of borders. WARNING: Some of the following attributes may not be available in certain browsers. Check the property in our <a href="dictionary.html">dictionary</a> to see browser supports.</p>
	<p>Borders are not very difficult to implement, but should be used sparingly and should not take up a majority of the design of the page. To declare a basic border around an object it is simply: </p>

<pre class = "prettyprint">border: width type color;</pre>

<p>In this case, width is any normal CSS size, such as pixels, ems, or a percentage. Type is the type of border you want, such as solid or dashed. Color is what color you want that border to be. </p>
	<p>Now to help add depth to these objects with the border, and give your webpage a sense of "3D", we can add curvature and shadows. To add curvature is:</p>
<pre class = "prettyprint">border-radius: radius;</pre>
<p>In this case, the radius is some numeric value that determines how much curvature the corner now has. This is followed by shadows:</p>
<pre class = "prettyprint">box-shadow: y-value x-value color;</pre>
<p>This will cause the shadows on the bottom and side of the box to move left and right or up and down respectfully, based on the numerical value given. So if you wanted to make a div have a black shadow border, with very little variance in the shadow from the bottom of the div, it would 
look like:</p>

<pre class = "prettyprint">box-shadow: 2px 2px black;</pre></p>

	<p>Finally, we can look at setting an image to a border. If you don’t like how CSS does their borders, then you can create your own, and add it in instead. This can be done using a little complex CSS 3:

<pre class = "prettyprint">border-image:url(image) length height type;</pre>

<p>Here, we see that the image used becomes the necessary length and height, and depending on the type, we see two different effects. The first is round, causes the image to be repeated for the entirety of the border, whereas stretch, causes the image to be stretched out to fit the size of the border. 
Borders are very nice for adding a subtle pop to a menu or enhancing the difference between two containers. </p>

        <h3><a href="../tutorials.php">< back to Tutorials</a></h3>
	
	<h3><a href="../quizzes/border-outline.php">< Border-outline Quiz</a></h3>
	
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