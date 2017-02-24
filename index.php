<?php 
require_once "connect.php";

$sql = $db->prepare("SELECT id, question FROM survey");
$sql->execute();
$result = $sql->get_result();
while ($question = $result->fetch_assoc()) {
	$id = (int)$question["id"];
	$questions[$id] = $question["question"];
}
$sql->close();

require_once "disconnect.php";
?>

<?php require_once "header.php"; ?>

<form action="question.php" method="POST">
	<fieldset>
		<legend>Survey</legend>
		<div class="form-group">
			<label for="select" class="control-label">
				Questions
			</label>
			<select class="form-control" id="select" name="select">
				<?php 
					foreach ($questions as $key => $val) {
						echo "<option value='" . $key . "''>" . $val . "</option>";
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">
				Select a Question
			</button>
		</div>
		<a href="create.php">Create new question</a>
	</fieldset>
</form>

<?php require_once "footer.php"; ?>