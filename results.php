<?php 
require_once "connect.php";

$id = $_GET["id"]; 

$sql = $db->prepare("SELECT * FROM survey WHERE id = ?");
$sql->bind_param("s", $id);
$sql->execute();
$result = $sql->get_result();
$survey = $result->fetch_assoc();
$sql->close();

$a = (int)$survey["voted_a"];
$b = (int)$survey["voted_b"];
$c = (int)$survey["voted_c"];
$sum = $a + $b + $c;
if ($sum) {
	$ap = round($a / $sum * 100);
	$bp = round($b / $sum * 100);
	$cp = round($c / $sum * 100);
} else {
	$ap = $bp = $cp = 0;
}

require_once "disconnect.php";
?>

<?php require_once "header.php"; ?>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">
			Results:&nbsp;&nbsp;
			<?=$survey["question"]?>
		</h3>
	</div>
	<div class="panel-body">
		<div>
			<?=$survey["option_a"]?>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
			<?=$ap?>% (<?=$a?>)
			<div class="progress">
  			<div class="progress-bar progress-bar-info" style="width:<?=$ap?>%">	
  			</div>
			</div>
		</div>

		<div>
			<?=$survey["option_b"]?>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
			<?=$bp?>% (<?=$b?>)
			<div class="progress">
  			<div class="progress-bar progress-bar-success" style="width:<?=$bp?>%">	
  			</div>
			</div>
		</div>

		<div>
			<?=$survey["option_c"]?>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
			<?=$cp?>% (<?=$c?>)
			<div class="progress">
  			<div class="progress-bar progress-bar-warning" style="width:<?=$cp?>%">	
  			</div>
			</div>
		</div>

		<a class="btn btn-default return" href="index.php">
			<span class="glyphicon glyphicon-hand-left"></span>
			&nbsp;&nbsp;Return
		</a>
	</div>
</div>

<?php require_once "footer.php"; ?>