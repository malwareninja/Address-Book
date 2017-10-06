<?php
	$con = mysql_connect("localhost","root","root");
	if($con==NULL){
		echo "Error establishing database connection.";
	}
	else{
		mysql_select_db("address-book");
	}
?>