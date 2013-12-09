var array = ["collapseKeyframes", "collapseAnimation", "collapseAnimationName",
"collapseAnimationDuration", "collapseAnimationTimingFunction", "collapseAnimationDelay",
"collapseAnimationIterationCount", "collapseOverflowX", "collapseOverflowY", "collapseColorOpacity"
];

var rand = array[Math.floor(Math.random() * array.length)];

console.log(rand);

if (rand == "collapseKeyframes" || rand == "collapseAnimation" || rand == "collapseAnimationName"
    || rand == "collapseAnimationDuration" || rand == "collapseAnimationTimingFunction" || rand == "collapseAnimationDelay"
    || rand == "collapseAnimationIterationCount")
{
    var name = "animation";
    $('#newLink1').html("Animation");
}
else if (rand == "collapseOverflowX" || rand == "collapseOverflowY")
{
    var name = "box-properties";
    $('#newLink1').html("Overflow");
}
else if (rand == "collapseColorOpacity")
{
    var name = "color";
    $('#newLink1').html("Color Opacity");
}

if(rand == "collapseKeyframes")
{
	var new = "animation";
}
else if(rand == "collapseAnimation")
{
	var new = "collapseKeyframes";
}
else if(rand == "collapseAnimationName")
{
	var new = "collapseAnimation");
}
else if(rand == "collapseAnimationDuration")
{
	var new = "collapseAnimationName";
}
else if(rand == "collapseAnimationTimingFunction";
{
	var new = "collapseAnimationDuration";
}
else if(rand == "collapseAnimationDelay")
{
	var new = "collapseAnimationTimingFunction";
}
else if(rand == "collapseAnimationIterationCount")
{
	var new = "collapseAnimationDelay";
}
else if(rand == "collapseOverflowX")
{
	var new = "box-properties";
}
else if(rand == "collapseOverflowY")
{
	var new = "collapseOverflowX";
}
else if(rand == "collapseColorOpacity")
{
	var new = "collapseColor";
}



console.log(name);

//document.getElementById('newLink1').href += "dictionary.php#" + rand;
$('#newLink1').attr('href', 'dictionary.php#' + new);
