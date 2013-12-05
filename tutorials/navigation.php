<?php

  $currentPage="Tutorials";

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Navigation - CSS Tutorial</title>
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
		<h1>Where to Go - Navigation Bar</h1>

	<p>Creating global navigation with an indicator of where a user is on the website is one of the more important aspects to creating a website. It makes the user’s navigation throughout the site much more simple, and if they are able to find what they want very quickly, they will almost always return to find it again. So where do we begin? Well first, there are a few unsung rules of global navigation that need to be discussed before we can begin implementation. First, we never want the global navigation to be more than 7 items long, however this is dependant on the information that is being used. If you feel like the navigation is too cluttered, try condensing two or more menus into one submenu. Second, we should always know where within the site we are, and we can do this through manipulation of the global navigation. As long as there is something different about the menu item for the current page, the user will easily be able to find their way around the site.</p>
	<p>Now what? Now comes the issue of determining what will be in our navigation bar. For the sake of this tutorial, we will create the menu for a website about a location we frequently visit. Within this navigation bar, we will have a link to various pages: Home, Map, History, Attractions, and Education. However, since Attractions and Education can have so many topics within each of them, we will create a submenu for Attractions with Historical Attractions, Restaurants, and Activities, as well as for Education, we will create a submenu for Public and Private forms of education within the area.</p>
	<p>Now that we have the items that will be placed inside of our navigation, it is time to get to work creating it. First, we’re going to need a few unordered lists as our foundation. This first unordered list will contain everything that the user sees when they first land on the site, while the second two will be what that user sees when they hover over either Attractions or Education. For the sake of making the menu easier to design, we’re going to put an id named "nav" on the main &lt;ul&gt;:</p>

<pre class = "prettyprint">
&lt;ul id = "nav" &gt;
    &lt;li&gt;&lt;a href =""&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href =""&gt;Map&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href =""&gt;History&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href =""&gt;Attractions&lt;/a&gt;
	&lt;ul&gt;
	    &lt;li&gt;&lt;a href =""&gt;Historical&lt;/a&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;a href =""&gt;Restaurants&lt;/a&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;a href =""&gt;Activities&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href =""&gt;Education&lt;/a&gt;
	&lt;ul&gt;
	    &lt;li&gt;&lt;a href =""&gt;Private&lt;/a&gt;&lt;/li&gt;
	    &lt;li&gt;&lt;a href =""&gt;Public&lt;/a&gt;&lt;/li&gt;
	&lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;
</pre></p>

<p>Now that we have the HTML done, we can begin work on the CSS portion, and really make this navigation shine. The first thing we want to do is get rid of bullet points left by the unordered list, as we don’t want to see these in our final product. </p>

<pre class = "prettyprint">ul{
    list-style: none;
    display:block;
}</pre></p>

<p>Here, the display property groups the items together so that when we hide the submenus, the entire menu is properly grouped together. We then follow this with another block specifically to remove the underlines, and default blue coloring for our links:</p>

<pre class = "prettyprint">
ul a{
    text-decoration: none;
    color: black;
}
</pre></p>

<p>In this case, the header for the block essentially reads: any &lt;a&gt; tags within the first &lt;ul&gt; will not have a text decoration and the text will be black. So now, our website should look something like this:</p>
<a target="_blank" href="examples/navigation/nav1/nav.html" class="btn btn-primary">View Example</a>

<p>Now we’re going to add a little style, just so that we’re able to see what’s really happening as we progress with our code:</p>

<pre class = "prettyprint">
li{
    border:1px solid black;
    margin: 2px;
    padding: 2px;
    font-family: sans-serif;
    width: 150px;
}

li ul li{
    width: 100px;
}
</pre>

<p>Within these two blocks, we have done very little styling. In the first block for &lt;li&gt; tags, we added a border, as well as changed the font and spaced each menu item out, this way it is easy for us to read and see what’s going on. The important part here is to note the width, which we will get to in just a minute. In the second block, we modify all &lt;li&gt; tags in a &lt;ul&gt; that is inside another &lt;li&gt;. We’re modifying the width of this, so that it overrides the width from the first &lt;li&gt; block. This is important to do because without it, the border from the submenus would go further past the global menu, which is something that we don’t want. Now that we have that done, we can look into hiding the submenus. This is done with a simple line, inside a not so simple block:</p>

<pre class = "prettyprint">
ul#nav li ul{
    display: none;
}
</pre>

<p>This header may seem scary at first, but under closer examination it becomes clearer. The first portion is ul#nav, which forces this block to concern itself only with a &lt;ul&gt; tag that has the id nav. The second portion is the li ul. This part then tells the block to look at only the &lt;ul&gt; tag that is within the &lt;li&gt; tags, within ul#nav. So now, the navigation should look something like this:</p>
<a target="_blank" href="examples/navigation/nav2/nav.html" class="btn btn-primary">View Example</a>

<p>But how do we make the submenus visible now? Simple. we just add the following to our CSS file. </p>

<pre class = "prettyprint">
ul#nav li:hover ul{
    display: block;
}
</pre></p>

<p>This is the exact same header as the previous block, however, added to it is the :hover to the li. What this does is causes whatever is in the &lt;ul&gt; tags in the &lt;li&gt; tags to display whenever the &lt;li&gt; tag is hovered over with a cursor. </p>
	<p>The last key portion of any good navigation is letting your user know where on the website you are. This can be done through a few options:</p>
	<p>1. By telling the user what page they are on at the top of the current page. This is a good method if you do not have many pages in the site, and don’t have a truly dynamic navigation.</p>
	<p>2. Highlighting the current page in your global or submenu navigation. This is useful when you have multiple of pages within your site, as it gives the user a clear indication where they are and how they got there. In this tutorial we will show you how to do the later, and how it is as simple as adding these few lines of code:</p>

<pre class = "prettyprint">
&lt;li class = "active"&gt;&lt;a href =""&gt;Home&lt;/a&gt;&lt;/li&gt;

.active{
    background-color: lightblue;
}
</pre>

<a target="_blank" href="examples/navigation/nav3/nav.html" class="btn btn-primary">View Example</a>

<p>By adding the "active" class to the page on with the &lt;li&gt; tag currently being accessed, it adds a simple "breadcrumb" that allows the user to know that, in this case, they are currently on the homepage.</p>
	<p>Making a basic vertical menu in CSS is as easy as that. Vertical menus are useful for almost all sites, as well as horizontal navigation bars. However, we will not spill the secrets to a horizontal navigation bar; we’ll let you try and discover how to do that on your own. </p>

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