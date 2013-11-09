/*parameters: str questionName, int question number, int correctQuestionAnswer */
function radioButtonValidation(questionName, questionNumber, correctAnswer){
	var correctCount = 0;
	var numSelectCount = 0;
	
	for(i=0; i < questionNumber; i++)
	{
		if(document.getElementsByName(questionName)[i].checked)
		{
			numSelectCount++;
		}
	}
	
	//validate if user choose at least one radio button
	if(numSelectCount > 0)
	{
		//loop to check each radio answer 
		for(i=0; i < questionNumber; i++)
		{
			if((document.getElementsByName(questionName)[i].value == "correct") && document.getElementsByName(questionName)[i].checked)
			{
				correctCount ++;
			}
		}
		
		if(correctCount != 1) //chose the wrong answer
		{
			return "Question " + questionName + " is incorrect. The correct answer would be " + correctAnswer + " .";
		}
		else{
			return "";
		}
	}
	else{ 
		//if user has not chosen any radio button
		return "Question " + questionName + " has not been answered";
	}
}