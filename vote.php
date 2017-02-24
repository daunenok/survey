<?php 
require_once "connect.php";

$id = $_POST["id"];
$choice = $_POST["choice"];

switch ($choice) {
	case "a":
		$sql = $db->prepare("SELECT voted_a FROM survey WHERE id = ?");
		break;
	case "b":
		$sql = $db->prepare("SELECT voted_b FROM survey WHERE id = ?");
		break;
	case "c":
		$sql = $db->prepare("SELECT voted_c FROM survey WHERE id = ?");
		break;
}
$sql->bind_param("s", $id);
$sql->execute();
$result = $sql->get_result();
$survey = $result->fetch_row();
$sql->close();

$count = (int)$survey[0];
$count++;

switch ($choice) {
	case "a":
		$sql = $db->prepare("UPDATE survey SET voted_a = ? WHERE id = ?");
		break;
	case "b":
		$sql = $db->prepare("UPDATE survey SET voted_b = ? WHERE id = ?");
		break;
	case "c":
		$sql = $db->prepare("UPDATE survey SET voted_c = ? WHERE id = ?");
		break;
}
$sql->bind_param("ss", $count, $id);
$sql->execute();
$sql->close();

require_once "disconnect.php";

header("Location: results.php?id=$id");
?>