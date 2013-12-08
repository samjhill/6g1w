var array = ["collapseKeyframes", "collapseAnimation", "collapseAnimationName",
"collapseAnimationDuration", "collapseAnimationTimingFunction", "collapseAnimationDelay",
"collapseAnimationIterationCount", "collapseOverflowX", "collapseOverflowY", "collapseColorOpacity"
];

var rand = array[Math.floor(Math.random() * array.length)];

if (rand == array[0] || rand == array[1] || rand == array[2] || rand == array[3] || rand == array[4] || rand = array[5]) || rand == array[6])
{
    rand = "animation";
}
else if(rand == array[7] || rand == array[8])
{
    rand = "box";
}
else if(rand == array[9])
{
    rand = "color";
}

document.getElementById("newLink1").href += rand;

var name = rand.match(/[A-Z][a-z]+/g);

document.getElementById("newLinkId1").h3 = name;