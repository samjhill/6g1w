var array = ["Keyframes", "Animation", "AnimationName",
"AnimationDuration", "AnimationTimingFunction", "AnimationDelay",
"AnimationIterationCount", "OverflowX", "OverflowY", "ColorOpacity"
];

var rand = array[Math.floor(Math.random() * array.length)];

document.getElementById("newLink1").href += rand;

console.log(document.getElementById("newLink1").href);