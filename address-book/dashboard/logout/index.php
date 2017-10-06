<?php
	session_start();
	if(isset($_SESSION['UID'])){
		session_destroy();
	}
	header("Location:../");
?>