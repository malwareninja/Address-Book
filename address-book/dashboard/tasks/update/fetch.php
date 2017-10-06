<?php
	include('../../../include/db.php');
	$email = $_POST['email'];
	$res = mysql_query("SELECT * FROM persons WHERE Email='$email' ",$con);
	$array = mysql_fetch_row($res);
	echo json_encode($array);
?>