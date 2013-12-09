var array = ["collapseKeyframes", "collapseAnimation", "collapseAnimationName",
"collapseAnimationDuration", "collapseAnimationTimingFunction", "collapseAnimationDelay",
"collapseAnimationIterationCount", "collapseOverflowX", "collapseOverflowY", "collapseColorOpacity"
];

var rand = array[Math.floor(Math.random() * array.length)];

if(rand == "collapseKeyframes")
{
	var link = "animation";
	$('#newLink1').html("@keyframes");
}
else if(rand == "collapseAnimation")
{
	var link = "collapseKeyframes";
	$('#newLink1').html("Animation");
}
else if(rand == "collapseAnimationName")
{
	var link = "collapseAnimation";
	$('#newLink1').html("Animation Name");
}
else if(rand == "collapseAnimationDuration")
{
	var link = "collapseAnimationName";
	$('#newLink1').html("Animation Duration");
}
else if(rand == "collapseAnimationTimingFunction")
{
	var link = "collapseAnimationDuration";
	$('#newLink1').html("Animation Timing Function");
}
else if(rand == "collapseAnimationDelay")
{
	var link = "collapseAnimationTimingFunction";
	$('#newLink1').html("Animation Delay");
}
else if(rand == "collapseAnimationIterationCount")
{
	var link = "collapseAnimationDelay";
	$('#newLink1').html("Animation Iteration Count");
}
else if(rand == "collapseOverflowX")
{
	var link = "box-properties";
	$('#newLink1').html("Overflow-X");
}
else if(rand == "collapseOverflowY")
{
	var link = "collapseOverflowX";
	$('#newLink1').html("Overflow-Y");
}
else if(rand == "collapseColorOpacity")
{
	var link = "collapseColor";
	$('#newLink1').html("Color Opacity");
}

$('#newLink1').attr('href', 'dictionary.php#' + link);
