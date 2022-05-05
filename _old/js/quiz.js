jQuery(document).ready(function(){

	jQuery("input[type='checkbox']").click(function(){

		var questionGroup = jQuery(this).closest(".question-group")

		// disable so they user can only click once
		questionGroup.find("input[type='checkbox']").attr("disabled", "disabled");

		// return the correct or incorrect value
		var blah = '<div class="answer-comment">' + jQuery(this).attr("data-comment") + '</div>';
		jQuery(this).closest(".question-checkbox").after(blah);
		
		if(jQuery(this).attr("value") == 1) {
			jQuery(this).closest("div").addClass("correct");
			jQuery(this).closest(".question-group").find(".answer-comment").addClass("correct");
			questionGroup.find(".answer-comment").addClass("correct");
		} else {
			jQuery(this).closest("div").addClass("incorrect");
			jQuery(this).closest(".question-group").find(".answer-comment").addClass("incorrect");
			questionGroup.find(".answer-comment").addClass("incorrect");
		}
		
	})

	jQuery("input[type='button']").click(function(){
		var correctAnswers = 0;
		var numQuestions = 0;
		var results;
		jQuery(".question-group").each(function(){
			numQuestions++;
			if (jQuery(this).find("input:checked").val() == 1) {correctAnswers++;}
		});

		results = Math.round((correctAnswers/numQuestions) * 100);
		resultsHTML = '<p>You got <strong>' + results + '%</strong></a>'

		if (results <= 25) {
			resultsHTML += '<p>' + jQuery(".lessThan25Percent").val() + '</p>';
		} else if (results > 25 && results <=50) {
			resultsHTML += '<p>' + jQuery(".bewtween25and50Percent").val() + '</p>';
		} else if (results > 50  && results <= 75) {
			resultsHTML += '<p>' + jQuery(".bewtween50and75Percent").val() + '</p>';
		} else if (results > 75 && results <= 100) {
			resultsHTML += '<p>' + jQuery(".bewtween75and100Percent").val() + '</p>';
		}

		jQuery(".quiz-result").html(resultsHTML);
		jQuery(".quiz-result").show();
	})
});