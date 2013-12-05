<?php

  $currentPage="Tutorials";

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Text - CSS Tutorial</title>
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
		<h1>Shining Through Simplicity - Text Modification</h1>
<p>Text is one of the key aspects to any webpage, as it is what the user will spend the most time on in their duration of their browsing. So how can we make it easier for the user to understand your message, without straining their eyes? Well first, we can change the font. It has been discovered that, between the two main styles of fonts: serif and sans-serif, a sans-serif font is more acceptable for a webpage, such as Verdana. To change your website’s font, you can do the following:</p>

<pre class = "prettyprint">font-family: sans-serif specific font;</pre>

	<p>Here, after we add the sans-serif, we can specify what font type we want, for instance Verdana. This is useful, because if a browser does not support a specific font, it will default to another sans-serif font.</p>
	<p>Another useful property of text, is adding style and changing the size of the font. In this case you can use the following two properties:</p>

<pre class = "prettyprint">
font-style: type;
font-size: size;
</pre>

	<p>In these two cases, the type specifies either italic, normal or bold, while the size attribute specifies the numerical value you want for the necessary text. Both of these options add flexibility to the text on the website, as well as allowing you to fully customize your site to be as unique as possible. </p>
	<p>Now, a huge aspect in site design is making sure everything is pleasing to the eyes in terms of color, especially when comparing the text and the background. Nobody wants to strain their eyes trying to read blue text on a black background. There are plenty of websites you can choose from to help pick contrasting color schemes, we here suggest <a href="http://colorschemedesigner.com/">http://colorschemedesigner.com/</a> as it gives you a wide range of options, as well as providing you with the HEX value for the specific color. But how do we change the color of the text? It may not seem self explanatory, but it is as simple as calling the color property:</p>

<pre class = "prettyprint">color: value;</pre>

	<p>Here, the value can be a multiple of things. It can be the name of the color, the HEX values for that color, or the RGB values. whichever is easiest for you to implement is suggested, just be aware, that for more complex colors, the HEX value is easier to use than the RGB value. </p>
	<p>The next aspect of text modification is alignment, but there are a few precautions that need to be taken here. First, this is the syntax for alignment: </p>

<pre class = "prettyprint">text-align: position;</pre>

	<p>Position refers to either left, center or right justified. However, any paragraphs should be left justified, because it is much easier for your user to read a left justified paragraph rather than a center or right justified paragraph. This does not limit you from using center and right however. For example, you can use center justifying to help make a menu cleaner to read and understand. </p>
	<p>The last point for this tutorial is in terms of links. A key aspect for links is removing the underline that follows. This can be done through the use of the text-decoration property:</p>

<pre class = "prettyprint">text-decoration: type;</pre>

<p>In this case, the key difference between the values for type is whether you want the text underlined or not. This is useful for adding a clickable link that flows seamlessly within the site. To accomplish this, we can modify the link tags in our CSS file by saying:</p>

<pre class = "prettyprint">
a{
    color: black;
    text-decoration: none;
}
</pre>

<p>The color change allows the text color to become black, or whatever is within the site, while the text-decoration is getting rid of the underline for us. </p>
<p>Text based properties allow you to add subtly to our website and uniqueness within the text, making it not only easier for the user to read, but allows you to stand out from other sites as well.</p>
        <h3><a href="../tutorials.php">< back to Tutorials</a></h3>
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