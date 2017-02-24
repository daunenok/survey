<?php 
require_once "connect.php";

$question = $_POST["question"];
$ansa = $_POST["answera"];
$ansb = $_POST["answerb"];
$ansc = $_POST["answerc"];

$sql = $db->prepare("INSERT INTO survey(question, option_a, option_b, option_c, voted_a, voted_b, voted_c) VALUES (?, ?, ?, ?, 0, 0, 0)");
$sql->bind_param("ssss", $question, $ansa, $ansb, $ansc);
$sql->execute();
$sql->close();

require_once "disconnect.php";

header("Location: index.php");
?>