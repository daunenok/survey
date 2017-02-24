<?php 
require_once "connect.php";

$id = $_POST["select"];

$sql = $db->prepare("SELECT * FROM survey WHERE id = ?");
$sql->bind_param("s", $id);
$sql->execute();
$result = $sql->get_result();
$survey = $result->fetch_assoc();
$sql->close();

require_once "disconnect.php";
?>

<?php require_once "header.php"; ?>

<form action="vote.php" method="POST">
	<fieldset>
		<legend><?php echo $survey["question"]; ?></legend>
		<div class="form-group radios">
			<div class="radio">
				<label>
					<input type="radio" name="choice" value="a">
					<?php echo $survey["option_a"]; ?>
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="choice" value="b">
					<?php echo $survey["option_b"]; ?>
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="choice" value="c">
					<?php echo $survey["option_c"]; ?>
				</label>
			</div>
		</div>
		<input type="hidden" name="id" value="<?=$survey['id']?>">
		<div class="form-group">
			<button type="submit" class="btn btn-primary">
				Click here to vote
			</button>
			<a href="results.php?id=<?=$survey['id']?>" class="btn btn-primary">
				View results
			</a>
			<a class="btn btn-default return" href="index.php">
				<span class="glyphicon glyphicon-hand-left"></span>
				&nbsp;&nbsp;Return
			</a>
		</div>
	</fieldset>
</form>

<?php require_once "footer.php"; ?>