var array = ["Keyframes", "Animation", "AnimationName",
"AnimationDuration", "AnimationTimingFunction", "AnimationDelay",
"AnimationIterationCount", "OverflowX", "OverflowY", "ColorOpacity"
];

var rand = array[Math.floor(Math.random() * array.length)];

document.getElementById("newLink1").href += rand;

var name = rand.match(/[A-Z][a-z]+/g);

document.getElementById("newLinkId1").h3 = name;