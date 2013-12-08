var array = ["collapseKeyframes", "collapseAnimation", "collapseAnimationName",
"collapseAnimationDuration", "collapseAnimationTimingFunction", "collapseAnimationDelay",
"collapseAnimationIterationCount", "collapseOverflowX", "collapseOverflowY", "collapseColorOpacity"
];

var rand = array[Math.floor(Math.random() * array.length)];

if (rand == array[0] || rand == array[1] || rand == array[2]
    || rand == array[3] || rand == array[4] || rand == array[5]
    || rand == array[6])
{
    var name = "animation";
}
else if(rand == array[7] || rand == array[8])
{
    var name = "box";
}
else if(rand == array[9])
{
    var name = "color";
}

document.getElementById("newLink1").href += name;