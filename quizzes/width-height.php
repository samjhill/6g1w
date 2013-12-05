<?php

  $currentPage="Quizzes";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset='utf-8' />
    <title>Width & Height Quiz</title>
    <link type="text/css" rel="stylesheet" href="../assets/font-awesome/css/font-awesome.css" />
    <link type="text/css" rel="stylesheet" href="../assets/prettify.css" />
    <link type="text/css" rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
                
    <style>
        #error_message
		{
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
			errorMsg += radioButtonValidation("q1", 4, "B")  + "<br/>";
			errorMsg += radioButtonValidation("q2", 2, "F")  + "<br/>";;
			errorMsg += radioButtonValidation("q3", 4, "C")  + "<br/>";
			errorMsg += radioButtonValidation("q4", 2, "T")  + "<br/>";;
			errorMsg += radioButtonValidation("q5", 3, "A")  + "<br/>";

      if(errorMsg.length > (5*5) )
      {
        document.getElementById("error_message").innerHTML = "You got these answers wrong: <br/>" + errorMsg;        
				document.getElementById("error_message").style.display = "block";        
			}
			else
			{
				document.getElementById("error_message").innerHTML = "Your answers are perfect! <br/>" + errorMsg;
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
        
		<h1>Width and Height</h1>
        
        <div class="question">
            <span>Q1) What is the proper syntax for setting max-height?:</span>
            <label for ="q1a1"><input type="radio" name="q1" value="incorrect" id="q1a1"/> a) height = 50 50 50 50;</label>
            <label for ="q1a2"><input type="radio" name="q1" value="correct" id="q1a2"/> b)max-height= 100px;</label>
			<label for ="q1a3"><input type="radio" name="q1" value="incorrect" id="q1a3"/> c)height.max = 200px;</label>
			<label for ="q1a4"><input type="radio" name="q1" value="incorrect" id="q1a4"/> d)min.height.form = 50px;</label>
	   </div>
        
        <div class="question">
            <span>Q2)Setting the height to auto will also set the width to the default value</span>
            <label for ="q2a1"><input type="radio" name="q2" value="incorrect" id="q2a1"/>T</label>
            <label for ="q2a2"><input type="radio" name="q2" value="correct" id="q2a2"/>F</label>
        </div>
        
		<div class="question">
            <span>Q3)Which of the following uses % to define a value</span>
            <label for ="q3a1"><input type="radio" name="q3" value="incorrect" id="q3a1"/>a)min-length </label>
            <label for ="q3a2"><input type="radio" name="q3" value="incorrect" id="q3a2"/>b)min-width</label>
			<label for ="q3a3"><input type="radio" name="q3" value="correct" id="q3a3"/>c)height</label>
			<label for ="q3a4"><input type="radio" name="q3" value="incorrect" id="q3a4"/>d)min.height.form = 50px;</label>
		</div>
		
        <div class="question">
            <span>Q4)Which of the following use % to define a value</span>
            <label for ="q4a1"><input type="radio" name="q4" value="correct" id="q4a1"/>T</label>
            <label for ="q4a2"><input type="radio" name="q4" value="incorrect" id="q4a2"/>F</label>
		</div>
        
		<div class="question">
			<span>Q5)Which syntax will successfully change the width and height?</span>
            <label for ="q5a1"><input type="radio" name="q5" value="correct" id="q5a1"/>a) .wrap
				{
					height:100px;
					width:100px;
				}
			</label>
            <label for ="q5a2"><input type="radio" name="q5" value="incorrect" id="q5a2"/>b)p.ex
				{
					height.max:100px;
					width.max:100px;
				}
			</label>
			<label for ="q5a3"><input type="radio" name="q5" value="incorrect" id="q5a3"/>c)p.ex
				{
					height.min:100px;
					width.min:100px;
				}
			</label>
		</div>
		
        <button type="button" class="btn btn-primary" onclick="validate() ;">Grade My Exam</button>
      </form>
	  
        <!-- php bootstrap include-->    
	<?php include( "../bootstrap.php");?>
	
    </div>
</body>
</html>