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

console.log(name);

document.getElementById('newLink1').href += "dictionary.php#" + rand;

