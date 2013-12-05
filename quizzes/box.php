<?php

  $currentPage="Quizzes";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset='utf-8' />
    <title>Box Properties Quiz</title>
    <link type="text/css" rel="stylesheet" href="../assets/font-awesome/css/font-awesome.css" />
    <link type="text/css" rel="stylesheet" href="../assets/prettify.css" />
    <link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
		
    <style>
	#error_message{
		width: 60%;
		border: 10px groove red;
		display: none;
	}
  </style>
    
    <script src="radioButtonValidation.js"></script>
  
    <script>
		function validate() 
		{
			document.getElementById("error_message") .innerHTML = "";
			var errorMsg = "";
			
			//copy the line and change the parameters for each question for each question
			errorMsg += radioButtonValidation("q1", 2, "A")  + "<br/>";
			errorMsg += radioButtonValidation("q2", 2, "B")  + "<br/>";;
			errorMsg += radioButtonValidation("q3", 2, "B")  + "<br/>";
			errorMsg += radioButtonValidation("q4", 4, "D")  + "<br/>";;
			errorMsg += radioButtonValidation("q5", 2, "B")  + "<br/>";
			//errorMsg += radioButtonValidation("q5", 3, "A")  + "<br/>";;
			
			
			
			if(errorMsg.length > (5*5) ) 
			{
				document.getElementById("error_message") .innerHTML = "You got these answers wrong: <br/>" + errorMsg;	
				document.getElementById("error_message") .style.display = "block";	
			}
			else{
				
				document.getElementById("error_message") .innerHTML = "Your answers are perfect! <br/>" + errorMsg;
			}
		}
  </script>
    
</head>
<body>
    
    <!--php navigation include-->
    <?php include("../navigation_level2.php"); ?>
    
    <div id="content">
	<form name ="quiz2" id="quiz2"
	  method="post" action="quiz2.html">
	<h3><a href="../quizzes.php">< back</a></h3>    
	<h1>Box Properties Quiz</h1>
	
	<div class="question">
	    <span>1)  What property specifies whether or not to clip the left/right edges of the element's content?</span>
	    <label for ="q1a1"> <input type="radio" name="q1" value="correct" id="q1a1"/>     overflow-x; </label>
	    <label for ="q1a2"> <input type="radio" name="q1" value="incorrect" id="q1a2"/>    overflow-y; </label>
	</div>
	
	<div class="question">
	    <span>2)  What property specifies whether or not to clip the top/bottom edges of the element's content?</span>
	    <label for ="q2a1"><input type="radio" name="q2" value="incorrect" id="q2a1"/>     overflow-x; </label>
	    <label for ="q2a2"><input type="radio" name="q2" value="correct" id="q2a2"/>     overflow-y; </label>
	</div>
	
	<div class="question">
	    <span>3) Rotation-point rotates an element around a given point</span>
	    <label for ="q1a1"><input type="radio" name="q3" value="incorrect" id="q3a1"/>    true </label>
	    <label for ="q3a2"><input type="radio" name="q3" value="correct" id="q3a2"/>    false </label>
	</div>
	
	<div class="question">
	    <span>4) What is the name of the property that sets the preferred scrolling method?</span>
	    <label for ="q4a1"><input type="radio" name="q4" value="incorrect" id="q4a1"/>    overflow-scroll; </label>
	    <label for ="q4a2"><input type="radio" name="q4" value="incorrect" id="q4a2"/>    overflow-method; </label>
	    <label for ="q4a3"><input type="radio" name="q4" value="incorrect" id="q4a3"/>   overflow; </label>
	    <label for ="q4a4"><input type="radio" name="q4" value="correct" id="q4a4"/>   overflow-style; </label>
	</div>
	
	<div class="question">
	    <span>5) Rotation-direction is a CSS property</span>
	    <label for ="q5a1"><input type="radio" name="q5" value="incorrect" id="q5a1"/>    true</label>
	    <label for ="q5a2"><input type="radio" name="q5" value="correct" id="q5a2"/>   false</label>
	</div>
	
	<button type="button" class="btn btn-primary" onclick="validate() ;">Grade My Exam</button>
      </form>
	
	<!-- php bootstrap include-->    
	<?php include( "../bootstrap.php");?>
    </div>
</body>
</html>
