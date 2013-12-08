function setNew(field)
{
    var array = ["Keyframes", "Animation", "AnimationName",
    "AnimationDuration", "AnimationTimingFunction", "AnimationDelay",
    "AnimationIterationCount", "OverflowX", "OverflowY", "ColorOpacity"
    ];

    var rand = array[Math.floow(Math.random() * array.length)];

    this.href = "dictionary.php"//#" + rand;

    var name = document.getElementById("newLinkId1");

    name.innerHTML(rand);
}