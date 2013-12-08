function setNew(field)
{
    var array = ["Keyframes", "Animation", "AnimationName",
    "AnimationDuration", "AnimationTimingFunction", "AnimationDelay",
    "AnimationIterationCount", "OverflowX", "OverflowY", "ColorOpacity"
    ];

    var rand = array[Math.floow(Math.random() * array.length)];

    var link = $('#newLink1');
    link.attr('href', link.attr('href') + rand);

    var name = document.getElementById("newLinkId1");

    name.innerHTML(rand);
}