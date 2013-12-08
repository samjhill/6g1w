function setNew()
{
    var array = ["Keyframes", "Animation", "AnimationName",
    "AnimationDuration", "AnimationTimingFunction", "AnimationDelay",
    "AnimationIterationCount", "OverflowX", "OverflowY", "ColorOpacity"
    ];

    var rand = array[Math.floor(Math.random() * array.length)];

    var link = document.getElementById("newLink1");

    link.href = "dictionary.php#" + rand;

    var ele = document.getElementById("newLinkId1");

    ele.h3 = rand;
}