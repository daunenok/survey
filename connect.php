<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "survey";
@$db = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($db->connect_error) {
	echo "Database connection error";
	exit;
}
?>