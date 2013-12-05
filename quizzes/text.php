<!doctype html>
<html lang="en">
<head>
    <meta charset='utf-8' />
    <title>Text Properties Quiz</title>
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
			errorMsg += radioButtonValidation("q1", 4, "C")  + "<br/>";
			errorMsg += radioButtonValidation("q2", 4, "C")  + "<br/>";
			errorMsg += radioButtonValidation("q3", 4, "A")  + "<br/>";
			errorMsg += radioButtonValidation("q4", 4, "B")  + "<br/>";
			errorMsg += radioButtonValidation("q3", 2, "T")  + "<br/>";

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
    <div class="navbar">
		<div class="navbar-inner">
		  <a class="brand" href="#">6G1W</a>
		  <ul class="nav">
			<li><a href="../index.html"><i class="fa fa-home fa-fw"></i> Home</a></li>
			<li><a href="../dictionary.html"><i class="fa fa-book fa-fw"></i> Dictionary</a></li>
			<li><a href="../tutorials.html"><i class="fa fa-pencil-square fa-fw"></i> Tutorials</a></li>
			<li class="active"><a href="../quizzes.html"><i class="fa fa-question fa-fw"></i> Quizzes</a></li>
			<li><a href="../about.html"><i class="fa fa-group fa-fw"></i> About</a></li>
		  </ul>
		</div>
    </div>
    
    <div id="content">
        <form name ="quiz2" id="quiz2"
          method="post" action="quiz2.html">
        <h3><a href="../quizzes.php">< back</a></h3>    
        
		<h1></h1>
        
        <div class="question">
            <span>Q1) Which property adds color to a text?</span>
            <label for ="q1a1"><input type="radio" name="q1" value="incorrect" id="q1a1"/> new-color</label>
            <label for ="q1a2"><input type="radio" name="q1" value="incorrect" id="q1a2"/>  current-color</label>
			<label for ="q1a3"><input type="radio" name="q1" value="correct" id="q1a3"/> color</label>
			<label for ="q1a4"><input type="radio" name="q1" value="incorrect" id="q1a4"/> change-color</label>
	   </div>
        
        <div class="question">
            <span>Q2) Which property change background color?</span>
            <label for ="q2a1"><input type="radio" name="q2" value="incorrect" id="q2a1"/>  color:blue;</label>
            <label for ="q2a2"><input type="radio" name="q2" value="incorrect" id="q2a2"/> background: blue;</label>
			<label for ="q2a3"><input type="radio" name="q2" value="correct" id="q2a2"/> background-color: blue;</label>
			<label for ="q2a4"><input type="radio" name="q2" value="incorrect" id="q2a2"/> color_background: blue;</label>
		</div>
        
		<div class="question">
            <span>Q3) Which property can be used to move the text to the right side of the webpage?</span>
            <label for ="q3a1"><input type="radio" name="q3" value="correct" id="q3a1"/> direction</label>
            <label for ="q3a2"><input type="radio" name="q3" value="incorrect" id="q3a2"/> move-right </label>
			<label for ="q3a3"><input type="radio" name="q3" value="incorrect" id="q3a3"/> align-rightmost</label>
			<label for ="q3a4"><input type="radio" name="q3" value="incorrect" id="q3a4"/> page-alignment</label>
		</div>
		
        <div class="question">
            <span>Q4)How do you set the shadow for an element?</span>
            <label for ="q4a1"><input type="radio" name="q4" value="incorrect" id="q4a1"/> shadow-box</label>
            <label for ="q4a2"><input type="radio" name="q4" value="correct" id="q4a2"/> box-shadow</label>
			<label for ="q4a3"><input type="radio" name="q4" value="incorrect" id="q4a3"/> box-border</label>
			<label for ="q4a3"><input type="radio" name="q4" value="incorrect" id="q4a4"/> box-outline</label>
		</div>
        
		<div class="question">
			<span>Q5)Border-left-color sets only the color of the </span>
            <label for ="q5a1"><input type="radio" name="q5" value="correct" id="q5a1"/> T</label>
            <label for ="q5a2"><input type="radio" name="q5" value="incorrect" id="q5a2"/> F</label>
		</div>
		
        <button type="button" class="btn btn-primary" onclick="validate();">Grade My Exam</button>
      </form>
	  
        <div id="error_message"></div>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
		<script>
			!function ($)  {
			  $(function() {
				window.prettyPrint && prettyPrint()    
			  }) 
			}(window.jQuery) 
		</script>
    </div>
</body>
</html>