<?php

  $currentPage="Quizzes";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset='utf-8' />
    <title>Animation Properties Quiz</title>
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
			errorMsg += radioButtonValidation("q1", 4, "A")  + "<br/>";
			errorMsg += radioButtonValidation("q2", 4, "B")  + "<br/>";;
			errorMsg += radioButtonValidation("q3", 4, "A")  + "<br/>";
			errorMsg += radioButtonValidation("q4", 2, "T")  + "<br/>";;
			errorMsg += radioButtonValidation("q5", 2, "T")  + "<br/>";
			
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
          method="post" action="quiz2.php">
        <h3><a href="../quizzes.php">< back</a></h3>    
        
		<h1>Animation Properties Quiz</h1>
        
        <div class="question">
			<span>Q1)Which property is used for defining the speed curve of an animation?</span>
            <label for ="q1a1"><input type="radio" name="q1" value="correct" id="q1a1"/> a)animation-timing-function;</label>
            <label for ="q1a2"><input type="radio" name="q1" value="incorrect" id="q1a2"/> b)animation-delay;</label>
			<label for ="q1a3"><input type="radio" name="q1" value="incorrect" id="q1a3"/> c)animation-play-state;</label>
			<label for ="q1a4"><input type="radio" name="q1" value="incorrect" id="q1a4"/> d)animation-duration;</label>
	   </div>
        
        <div class="question">
            <span>Q2)Which syntax is the proper use of the animation-play-state property?</span>
            <label for ="q2a1"><input type="radio" name="q2" value="incorrect" id="q2a1"/>a)animation-play-state:animation.paused; </label>
            <label for ="q2a2"><input type="radio" name="q2" value="correct" id="q2a2"/>b)animation-play-state:paused;</label>
			<label for ="q2a3"><input type="radio" name="q2" value="incorrect" id="q2a3"/>c)animation-current-state:paused;</label>
			<label for ="q2a4"><input type="radio" name="q2" value="incorrect" id="q2a4"/>d)animation-play-state:paused 10sec;</label>
		</div>
        
		<div class="question">
            <span>Q3)Which syntax wil determine when a specific animation will start?</span>
            <label for ="q3a1"><input type="radio" name="q3" value="correct" id="q3a1"/> a)animation.start(2) </label>
            <label for ="q3a2"><input type="radio" name="q3" value="incorrect" id="q3a2"/>b)animation-delay:2s;</label>
			<label for ="q3a3"><input type="radio" name="q3" value="incorrect" id="q3a3"/>c)animation.resume(2);</label>
			<label for ="q3a4"><input type="radio" name="q3" value="incorrect" id="q3a4"/>d)animation.paused(2);</label>
		</div>
		
        <div class="question">
            <span>Q4)The CSS property @keyframes defines an animation
            <label for ="q4a1"><input type="radio" name="q4" value="correct" id="q4a1"/>a)T</label>
            <label for ="q4a2"><input type="radio" name="q4" value="incorrect" id="q4a2"/>b)F</label>
		</div>
        
		<div class="question">
			<span>Q5)Animation-duration can be specified using seconds</span>
            <label for ="q5a1"><input type="radio" name="q5" value="correct" id="q5a1"/>a)T</label>
            <label for ="q5a2"><input type="radio" name="q5" value="incorrect" id="q5a2"/>b)F</label>
		</div>
		
        <button type="button" class="btn btn-primary" onclick="validate() ;">Grade My Exam</button>
      </form>
	  
        <!-- php bootstrap include-->    
	<?php include( "../bootstrap.php");?>
	
    </div>
</body>
</html>