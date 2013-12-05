<?php

  $currentPage="Tutorials";

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Basic CSS - CSS Tutorial</title>
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
		<h1>Basic CSS Walkthrough - CSS Tutorial</h1>
			

		<h3 id="what-is">What is CSS?</h3>
			<p>CSS stands for Cascading Style Sheet, and is used in creating the design presentation for a document written in a markup language, with the most popular being HTML. When used with HTML, CSS creates a flow and elegance within the website unachievable otherwise.</p>
		
		<h3 id="how-to">How to:</h3>
			<p>CSS uses hundreds of properties in order to turn basic HTML into something extravagant. But the most important thing you can do before you can see these properties at work, is call them, and you can call them in a few different ways.</p>
			
			<p>First, you can call the property within the HTML tag, known as inline.
				
				<pre class="prettyprint">&lt;div class="example" style="color:red; height:50px;"&gt;&lt;/div&gt;</pre>
		
		<p>Second, you create an internal style sheet. This stylesheet is formatted exactly the same as an external file, except this is called within the HTML file.</p>
	    
	    <pre class="prettyprint">&lt;title>&lt;/title&gt;
&lt;style&gt;
body{
    color: black;
    text: sans-serif;
    }
&lt;/style&gt;</pre>
	    
		<p>The internal style sheet requires the style tags in order to be read, and is written exactly in the same format as an external style sheet. </p>
			<p>Finally, as mentioned before, is the external style sheet. This is a file completely independent from the HTML file. it uses the same syntax format for internal style sheets. In order for the properties from the external sheet to be read from the HTML file, a single &lt;link&gt; tag can be used, as follows:</p>
			    <pre class="prettyprint">&lt;link rel="stylesheet" type="text/css" href="stylesheet.css"&gt;</pre>
		<p>This allows the CSS properties that you want to be used on the HTML page to not clutter up the HTML tags themselves with inline, and, in terms of the HTML file, is much more condensed than internal style sheets.</p>
		
			<p>Now that you know how to call each type of style, it is important to know how the syntax differs from inline, external and internal. For inline, the style is called much like creating a class or id.</p> 
			<pre class="prettyprint">&lt;div style="property: syntax; new property: syntax;"&gt;&lt;/div&gt;</pre>
		<p>So you create the div, p, or anything HTML tag that you need, type style, set it equal to a double quote, and then proceed to fill those quotes with properties and their formats, separating properties with a semi-colon.</p>
			<p>For internal and external stylesheet, the process is a little bit different, as you can see from the example above. You want to call the tag, class or id, each having its own format. Let’s say you want to modify the body of the HTML page and 2 divs within the body, one with an id of "contain", and another with a class of "box". Each tag would be called as follows: HTML tag is the name of the tag, ids are the name of the id preceded with a #, and classes are the name preceded with a period:</p>
			<pre class="prettyprint">
body{}
#contain{}
.box{}</pre>
		<p>Now, we'll fill these with properties. The syntax for calling a property is as follows:</p>
		<pre class="prettyprint">property: syntax;</pre>
		<p>So changing the color of a div’s text would look like this:</p>
		<pre class="prettyprint">color: red;</pre>
		<p>Now that we understand the basic syntax of these two portions, how do they look combined? Well a general view would look like this:</p>
		<pre class="prettyprint">
(#/.)tag
{
    property: syntax;
}</pre>
		<p>So if you wanted to change the text and left margin of the contain id from above, it would look like:</p>
<pre class="prettyprint">
#contain
{
    text: sans-serif;
    margin-left: 50%;
}</pre>
		    </p>
		
		<h3 id="style-format">Style Format:</h3>
			<p>So you just made your first external style sheet, and are ready to fill it up to make your HTML page all nice and pretty. But one of the major aspects of any coding is further readability from others, which is why we want to introduce the idea of formatting the stylesheet. There are many different ways to do this, but we will talk about 2 of the major formatting styles.</p>
			<p>Both of the following formats have a specific scheme for the HTML tags, ids and classes being called by the CSS file. The best way we find to do this, is to segment the CSS file into three portions: a portion for HTML tags, one for classes, and one for ids. This helps you to know where a specific item is in the file, especially when you have several different ids and classes being manipulated.</p>
			<p>The second format process comes within these three portions. In each portion, the best way to format the tags is alphabetically. This helps you to effortlessly find the tag, id or class you’re looking for, while still keeping the file as a whole organized. </p>
			<p>The next format option comes inside the tags themselves. This one is considered an option, because we have thought of 2 really good ways to format the CSS properties you want to use in for the specific tag.</p>
				<p>The first option is to do it like above, where each property is listed in alphabetical order. This is useful because it diminishes the time needed to find each property.</p>
				<p>The second option is to group each property by what they do. For instance, keep anything that modifies the text together, while everything changing the border is grouped together separated by a single space. This is very useful as it makes it easier to change a portion of the design as a whole. For example, if you want to change only the text, it is easier to find all the text properties within a tag as they are together, rather than having awkward spacing in between the different properties.</p>

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