<?php require_once "header.php"; ?>

<form action="new.php" method="POST">
	<fieldset>
		<legend>Create new question</legend>
		<div class="form-group">
      		<label for="question" class="control-label">Enter a question:</label>
   			<input type="text" class="form-control" id="question" name="question" placeholder="What is the question?"> 
    	</div>

    	<div class="form-group">
      		<label for="answera" class="control-label">Answer A:</label>
   			<input type="text" class="form-control" id="answera" name="answera" placeholder="Option A"> 
    	</div>

    	<div class="form-group">
      		<label for="answerb" class="control-label">Answer B:</label>
   			<input type="text" class="form-control" id="answerb" name="answerb" placeholder="Option B"> 
    	</div>

    	<div class="form-group">
      		<label for="answerc" class="control-label">Answer C:</label>
   			<input type="text" class="form-control" id="answerc" name="answerc" placeholder="Option C"> 
    	</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">
				Create a Question
			</button>
		</div>
		<a class="btn btn-default" href="index.php">
				<span class="glyphicon glyphicon-hand-left"></span>
				&nbsp;&nbsp;Return
		</a>
	</fieldset>
</form>

<?php require_once "footer.php"; ?>