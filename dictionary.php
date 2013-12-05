<?php

  $currentPage="Dictionary";

?>
<!DOCTYPE html>
<html lang='en'>
    <head>
		<meta charset='utf-8' />
		<title>Dictionary - CSS Reference by 6G1W</title>
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
    <a name="top"></a>
    <body>	
		<!--php navigation include-->
		<?php include("navigation.php"); ?>
		
		<div id="content">
			<h1>Dictionary</h1>
			
			<div id="side_navigation">
				<h2>Jump to</h2>
				<ul>
					<li><a href="#animation">Animation</a></li>
					<li><a href="#box-properties">Box</a></li>
					<li><a href="#border">Border</a></li>
					<li><a href="#outline">Outline</a></li>
					<li><a href="#background">Background</a></li>
					<li><a href="#color">Color</a></li>
					<li><a href="#text">Text</a></li>
				</ul>
			</div>
		
			<h2 id="animation">Animation</h2>
			<!-- start collape @keyframes -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseKeyframes">
					  @keyframes
					</a>
				  </h4>
				</div>
				<div id="collapseKeyframes" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p>Used specifically for setting animation</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    <h3>Definition/Use</h3><p>Use the @keyframe rule to make new animations using different sets of css styles.</p>
					    <h3>Syntax</h3><p>@keyframes animationName {keyframes-selector {css-styles;}}</p>
					    <h3>Similar CSS</h3><p>animation, animation-name, animation-duration, animation-delay</p>
					    <a href="" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseKeyframes">
						Close
					    </a>
				  </div>
				</div>
			</div>
			<!-- start collape animation -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseAnimation">
					  animation
					</a>
				  </h4>
				</div>
				<div id="collapseAnimation" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> A shortcut property for animation techniques.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p> A shortcut method for using the basic six animation properties.</p>
					    <h3>Syntax</h3><p>animation: name duration timing-function delay iteration-count direction;</p>
					    <h3>Similar CSS</h3><p>animation-name, animation duration,animation-delay</p>
					    <a href="http://jsfiddle.net/SQ6dA/44/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseAnimation">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
			
			<!-- start collape animation-name -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseAnimationName">
					  animation-name
					</a>
				  </h4>
				</div>
				<div id="collapseAnimationName" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Designates a name for the @keyframes animation.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p> Use the property to specify a name thats given to @keyframes animation.</p>
					    <h3>Syntax</h3><p>animation-name: keyframename|none;</p>
					    <h3>Similar CSS</h3><p>animation, animation delay</p>
					    <a href="http://jsfiddle.net/SQ6dA/41/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseAnimationName">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
			
			<!-- start collape animation-duration -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseAnimationDuration">
					  animation-duration
					</a>
				  </h4>
				</div>
				<div id="collapseAnimationDuration" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Designates the time in milliseconds that an animation takes to complete one cycle.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p> Used to set the time an animation takes to complete a cycle.</p>
					    <h3>Syntax</h3><p>animation-duration: time;</p>
					    <h3>Similar CSS</h3><p>animation, animation-name</p>
					    <a href="http://jsfiddle.net/SQ6dA/45/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseAnimationDuration">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    
			<!-- start collape animation-timing-function -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseAnimationTimingFunction">
					  animation-timing-function
					</a>
				  </h4>
				</div>
				<div id="collapseAnimationTimingFunction" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Designates the speed curve of the animation.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p> the speed curve explains the amount of time the specific animation uses to change a defined set of CSS styles to another set of styles.</p>
					    <h3>Syntax</h3><p> animation-timing-function: value;</p>
					    <h3>Similar CSS</h3><p>Animation-duration , animation-name, animation</p>
					    <a href="http://jsfiddle.net/SQ6dA/47/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseAnimationTimingFunction">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    
			<!-- start collape animation-delay -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseAnimationDelay">
					  animation-delay
					</a>
				  </h4>
				</div>
				<div id="collapseAnimationDelay" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Sets an point at which the animation will start.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p> The animation-delay value is measured in seconds and milliseconds. This will determine the start time.</p>
					    <h3>Syntax</h3><p>animation-delay: time;</p>
					    <h3>Similar CSS</h3><p>animation-timing-function</p>
					    
					    <a href="http://jsfiddle.net/SQ6dA/48/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseAnimationDelay">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
			<!-- start collape animation-iteration-count -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseAnimationIterationCount">
					  animation-iteration-count
					</a>
				  </h4>
				</div>
				<div id="collapseAnimationIterationCount" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Designates the number of times any given animation should be displayed.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p> The user can either choose a set number of times for the animation to be played or can set it to play for an infinite number of times.</p>
					    <h3>Syntax</h3><p>animation-iteration-count: value;</p>
					    <h3>Similar CSS</h3><p>animation-timing-function, animation-delay, animation-timing-function</p>
					    
					    <a href="http://jsfiddle.net/SQ6dA/49/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseAnimationIterationCount">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    <h2 id="box-properties">Box</h2>
			<!-- start collape overflow-x -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOverflowX">
					  overflow-x
					</a>
				  </h4>
				</div>
				<div id="collapseOverflowX" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p>Overflow-x is used when you want to crop the edges of the content into the area of the element’s content.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    <h3>Definition/Use</h3><p>Use this when you want to clip the left or right edge of the content.</p>
					    <h3>Syntax</h3><p>overflow-x: visible | hidden | scroll | auto |no-display | no-content;</p>
					    <h3>Similar CSS</h3><p>overflow-x, overflow-style, rotation, rotation-point</p>
					    <a href="http://jsfiddle.net/SQ6dA/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseOverflowX">
						Close
					    </a>
				  </div>
				</div>
			</div>

			<!-- start collape overflow-y -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOverflowY">
					  overflow-y
					</a>
				  </h4>
				</div>
				<div id="collapseOverflowY" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p>Overflow-y is used when you want to crop the edges of the content into the area of the element’s content.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    <h3>Definition/Use</h3><p>Use this when you want to clip the left or right edge of the content.</p>
					    <h3>Syntax</h3><p>overflow-y: visible | hidden | scroll | auto |no-display | no-content;</p>
					    <h3>Similar CSS</h3><p>overflow-x, overflow-style, rotation, rotation-point</p>
					    <a href="http://jsfiddle.net/SQ6dA/1/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseOverflowY">
						Close
					    </a>
				  </div>
			    </div>
			</div>
			
			<!-- start collape overflow-style -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOverflowStyle">
					  overflow-style
					</a>
				  </h4>
				</div>
				<div id="collapseOverflowStyle" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p>Overflow-style is used to set the ideal method of scrolling for elements that are overflowing.</p>
					    <h3>Browser support</h3>
					    <p>No official support yet. New CSS3 Property</p>
					    <h3>Definition/Use</h3><p>Use this when you want to clip the left or right edge of the content.</p>
					    <h3>Syntax</h3><p>overflow-style: auto | scrollbar | panner | move | marquee;</p>
					    <h3>Similar CSS</h3><p>overflow-y, overflow-style, rotation, rotation-point</p>
					    <a href="http://jsfiddle.net/SQ6dA/2/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseOverflowStyle">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
			<!-- start collape rotation -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseRotation">
					  rotation
					</a>
				  </h4>
				</div>
				<div id="collapseRotation" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Rotation rotates a block-level element counterclockwise.</p>
					    <h3>Browser support</h3>
					    <p>No official support yet. New CSS3 Property</p>
					    <h3>Definition/Use</h3><p>Use this when you want to rotate an element </p>
					    <h3>Syntax</h3><p>rotation: angle;</p>
					    <h3>Similar CSS</h3><p>overflow-x, overflow-y, overflow-style, rotation-point</p>
					    <a class="btn btn-primary disabled">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseRotation">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
			<!-- start collape rotation-point -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseRotationPoint">
					  rotation-point
					</a>
				  </h4>
				</div>
				<div id="collapseRotationPoint" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Rotation-point rotates an element so it becomes upside-down.</p>
					    <h3>Browser support</h3>
					    <p>No official support yet. New CSS3 Property</p>
					    <h3>Definition/Use</h3><p>This is used in conjunction with rotation to provide the values for the object to rotate.</p>
					    <h3>Syntax</h3><p>rotation-point: value;</p>
					    <h3>Similar CSS</h3><p>overflow-x, overflow-y, overflow-style, rotation</p>
					    <a class="btn btn-primary disabled">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseRotationPoint">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		<h2 id="border">Border</h2>
		
		    <!-- start collape border -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorder">
					  border
					</a>
				  </h4>
				</div>
				<div id="collapseBorder" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Rotation-point rotates an element so it becomes upside-down.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>This is used in conjunction with rotation to provide the values for the object to rotate.</p>
					    <h3>Syntax</h3><p>rotation-point: value;</p>
					    <h3>Similar CSS</h3><p>overflow-x, overflow-y, overflow-style, rotation</p>
					    <a href="http://jsfiddle.net/SQ6dA/5/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseBorder">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		    <!-- start collape border-bottom -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderBottom">
					  border-bottom
					</a>
				  </h4>
				</div>
				<div id="collapseBorderBottom" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Sets the border on only the bottom of the selected item.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the properties in this order: border-bottom-width, border-bottom-style, border-bottom-color</p>
					    <h3>Syntax</h3><p>border-bottom: thick dashed #333333;</p>
					    <h3>Similar CSS</h3><p>border</p>
					    <a href="http://jsfiddle.net/SQ6dA/6/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderBottom">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    
		    <!-- start collape border-bottom-color -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderBottomColor">
					  border-bottom-color
					</a>
				  </h4>
				</div>
				<div id="collapseBorderBottomColor" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the color of the border on the bottom of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set only the color of the bottom border.</p>
					    <h3>Syntax</h3><p>border-bottom-color: #333333;</p>
					    <h3>Similar CSS</h3><p>border, border-bottom</p>
					    <a href="http://jsfiddle.net/SQ6dA/8/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBorderBottomColor">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		    <!-- start collape border-bottom-style -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderBottomStyle">
					  border-bottom-style
					</a>
				  </h4>
				</div>
				<div id="collapseBorderBottomStyle" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the style of the border on the bottom of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set only the style of the bottom border.</p>
					    <h3>Syntax</h3><p>border-bottom-style: double;</p>
					    <h3>Similar CSS</h3><p>border, border-bottom</p>
					    <a href="http://jsfiddle.net/SQ6dA/14/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBorderBottomStyle">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    
		    <!-- start collape border-bottom-width -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderBottomWidth">
					  border-bottom-width
					</a>
				  </h4>
				</div>
				<div id="collapseBorderBottomWidth" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the width of the border on the bottom of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set only the width of the bottom border.</p>
					    <h3>Syntax</h3><p>border-bottom-width: 10px;</p>
					    <h3>Similar CSS</h3><p>border, border-bottom</p>
					    <a href="http://jsfiddle.net/SQ6dA/15/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBorderBottomWidth">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    
		    <!-- start collape border-color -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderColor">
					  border-color
					</a>
				  </h4>
				</div>
				<div id="collapseBorderColor" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the color of the border of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the color of all four borders of an element..</p>
					    <h3>Syntax</h3><p>border-color: red;</p>
					    <h3>Similar CSS</h3><p>border, border-bottom</p>
					    <a href="http://jsfiddle.net/SQ6dA/16/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBorderColor">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		    <!-- start collape border-left -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderLeft">
					  border-left
					</a>
				  </h4>
				</div>
				<div id="collapseBorderLeft" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the style of the left border of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the style of just the left border of a specified element.</p>
					    <h3>Syntax</h3><p>border-color: thick double red;</p>
					    <h3>Similar CSS</h3><p>border</p>
					    <a href="http://jsfiddle.net/SQ6dA/17/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBorderLeft">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    <!-- start collape border-left-color -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderLeftColor">
					  border-left-color
					</a>
				  </h4>
				</div>
				<div id="collapseBorderLeftColor" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the color of the left border of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the color of just the left border of a specified element.</p>
					    <h3>Syntax</h3><p>border-left-color: red;</p>
					    <h3>Similar CSS</h3><p>border</p>
					    <a href="http://jsfiddle.net/SQ6dA/18/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBorderLeftColor">
						Close
					    </a>
				  </div>
			
				</div>
			</div>

		    <!-- start collape border-left-width -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderLeftWidth">
					  border-left-width
					</a>
				  </h4>
				</div>
				<div id="collapseBorderLeftWidth" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the width of the left border of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the width of just the left border of a specified element.</p>
					    <h3>Syntax</h3><p>border-left-width: 5px;</p>
					    <h3>Similar CSS</h3><p>border</p>
					    <a href="http://jsfiddle.net/SQ6dA/21/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBorderLeftWidth">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		    <!-- start collape border-right -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBorderRight">
					  border-right
					</a>
				  </h4>
				</div>
				<div id="collapseBorderRight" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the style of the right border of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the style of just the right border of a specified element.</p>
					    <h3>Syntax</h3><p>border-right:thick double red;</p>
					    <h3>Similar CSS</h3><p>border</p>
					    <a href="http://jsfiddle.net/SQ6dA/22/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBorderRight">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    
		<h2 id="outline">Outline</h2>
		    <!-- start collape outline -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOutline">
					  outline
					</a>
				  </h4>
				</div>
				<div id="collapseOutline" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> set the outline around a selected element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Draw a line around an element, outside the border. Set in this order: color, style, width.</p>
					    <h3>Syntax</h3><p>blue dotted thick;</p>
					    <h3>Similar CSS</h3><p>border</p>
					    <a href="http://jsfiddle.net/SQ6dA/23/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseOutline">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		<h2 id="background">Background</h2>
		    <!-- start collape background-attachment -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBackgroundAttachment">
					  background-attachment
					</a>
				  </h4>
				</div>
				<div id="collapseBackgroundAttachment" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the background picture to scroll or make it fixed.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Scroll or Fixed.</p>
					    <h3>Syntax</h3><p>background-attachment:scroll;</p>
					    <h3>Similar CSS</h3><p>background-color</p>
					    <a href="http://jsfiddle.net/SQ6dA/25/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBackgroundAttachment">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    <!-- start collape background-color -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBackgroundColor">
					  background-color
					</a>
				  </h4>
				</div>
				<div id="collapseBackgroundColor" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the color of the background page.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Use this property to set the color of the background of an element. </p>
					    <h3>Syntax</h3><p>background-color: blue;</p>
					    <h3>Similar CSS</h3><p>background-attachment</p>
					    <a href="http://jsfiddle.net/SQ6dA/28/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBackgroundColor">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    <!-- start collape background-image -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBackgroundImage">
					  background-image
					</a>
				  </h4>
				</div>
				<div id="collapseBackgroundImage" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the image of the background of an element.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the background image.</p>
					    <h3>Syntax</h3><p>background-image: url(car.jpg');</p>
					    <h3>Similar CSS</h3><p>background-position, background-repeat</p>
					    <a href="http://jsfiddle.net/SQ6dA/25/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBackgroundImage">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		    <!-- start collape background-position -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBackgroundPosition">
					  background-position
					</a>
				  </h4>
				</div>
				<div id="collapseBackgroundPosition" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the location of the image</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the background image's position to left, center, or right.</p>
					    <h3>Syntax</h3><p>background-position:right; </p>
					    <h3>Similar CSS</h3><p>background-image, background-repeat</p>
					    <a href="http://jsfiddle.net/SQ6dA/30/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBackgroundPosition">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		    <!-- start collape background-repeat -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseBackgroundRepeat">
					  background-repeat
					</a>
				  </h4>
				</div>
				<div id="collapseBackgroundRepeat" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Set the image to repeat in a specified direction.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Repeat-x to repeat an image horizontally. Repeat-y to repeat vertically.</p>
					    <h3>Syntax</h3><p>background-repeat: repeat-y; </p>
					    <h3>Similar CSS</h3><p>background-image, background-position</p>
					    <a href="http://jsfiddle.net/SQ6dA/31/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseBackgroundPosition">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		<h2 id="color">Color</h2>
		
		    <!-- start collape color -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseColor">
					  color
					</a>
				  </h4>
				</div>
				<div id="collapseColor" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Set the font color.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Add color to font style.</p>
					    <h3>Syntax</h3><p>color: blue;</p>
					    <h3>Similar CSS</h3><p>opacity</p>
					    <a href="http://jsfiddle.net/SQ6dA/33/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseColor">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		    <!-- start collape color-opacity -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseColorOpacity">
					  color-opacity
					</a>
				  </h4>
				</div>
				<div id="collapseColorOpacity" class="panel-collapse collapse">
				  <div class="panel-body">
					<!--whole collapse div + submit and example-->
					
					    <h3>Description</h3><p> Fade the color.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Set the transparency of a color.</p>
					    <h3>Syntax</h3><p>opacity: 0.3;</p>
					    <h3>Similar CSS</h3><p>color</p>
					    <a href="http://jsfiddle.net/SQ6dA/32/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseColorOpacity">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		
		<h2 id="text">Text</h2>
		
		    <!-- start collape direction -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseDirection">
					  direction
					</a>
				  </h4>
				</div>
				<div id="collapseDirection" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Set text either right-to-left or left-to-right.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p>Make the text start in either direction.</p>
					    <h3>Syntax</h3><p>direction: ltr;</p>
					    <h3>Similar CSS</h3><p></p>
					    <a href="http://jsfiddle.net/SQ6dA/34/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseColor">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
			
		
		    <!-- start collape letter-spacing -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseLetterSpacing">
					  letter-spacing
					</a>
				  </h4>
				</div>
				<div id="collapseLetterSpacing" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Set the amount of spacing between letters.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p> Space out the letters.</p>
					    <h3>Syntax</h3><p>letter-spacing: -3px;</p>
					    <h3>Similar CSS</h3><p></p>
					    <a href="http://jsfiddle.net/SQ6dA/35/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseLetterSpacing">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
		
		    <!-- start collape line-height -->
			<div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseLineHeight">
					  line-height
					</a>
				  </h4>
				</div>
				<div id="collapseLineHeight" class="panel-collapse collapse">
				  <div class="panel-body">
					    <h3>Description</h3><p> Space out the height of the text line.</p>
					    <h3>Browser support</h3>
					    <img alt="IE" src="images/ie10.png" />
					    <img alt="Firefox" src="images/firefox.png" />
					    <img alt="Opera" src="images/opera.png" />
					    <img alt="Chrome" src="images/chrome.png" />
					    <img alt="Safari" src="images/safari.png" />
					    
					    <h3>Definition/Use</h3><p> Set the height of a line of text</p>
					    <h3>Syntax</h3><p>line-height: 40%;</p>
					    <h3>Similar CSS</h3><p></p>
					    <a href="http://jsfiddle.net/SQ6dA/36/" target="_blank" class="btn btn-primary">Example</a>
					    
					    <a class="accordion-toggle pull-right" data-toggle="collapse" href="#collapseLineHeight">
						Close
					    </a>
				  </div>
			
				</div>
			</div>
	    <a href="#top" id="backToTop">Back to Top</a>
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