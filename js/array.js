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
	var link = "animation";
}
else if(rand == "collapseAnimation")
{
	var link = "collapseKeyframes";
}
else if(rand == "collapseAnimationName")
{
	var link = "collapseAnimation";
}
else if(rand == "collapseAnimationDuration")
{
	var link = "collapseAnimationName";
}
else if(rand == "collapseAnimationTimingFunction";
{
	var link = "collapseAnimationDuration";
}
else if(rand == "collapseAnimationDelay")
{
	var link = "collapseAnimationTimingFunction";
}
else if(rand == "collapseAnimationIterationCount")
{
	var link = "collapseAnimationDelay";
}
else if(rand == "collapseOverflowX")
{
	var link = "box-properties";
}
else if(rand == "collapseOverflowY")
{
	var link = "collapseOverflowX";
}
else if(rand == "collapseColorOpacity")
{
	var link = "collapseColor";
}



console.log(name);

//document.getElementById('newLink1').href += "dictionary.php#" + rand;
$('#newLink1').attr('href', 'dictionary.php#' + link);
