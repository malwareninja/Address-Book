<?php
	include('../../../include/db.php');	
	$fn = trim($_POST['updatefn']);
	$ln = trim($_POST['updateln']);		
	$name = $fn.' '.$ln;
	$email = trim($_POST['email']);		
	$mobile = trim($_POST['updatemobile']);
	$permanant = trim($_POST['updatepermanant']);
	$temporary = trim($_POST['updatetemporary']);
	if(strlen($fn) > 0 && strlen($ln) > 0 && strlen($mobile) > 0 && strlen($email) > 0 && strlen($permanant) > 0 && strlen($temporary) > 0){		
		mysql_query("UPDATE persons SET Name='$name', Mobile='$mobile', Permanant_Address='$permanant', Temporary_Address='$temporary' WHERE Email='$email' ",$con);
		if(mysql_error()==""){
			echo '<p style="color: #4F8A10;font-weight: bold;">Person Updated Successfully!</p>';
		}
		else{
			echo '<p style="color: #D8000C;font-weight: bold;">Something Went Wrong, Try Again.</p>';
		}
	}
	else{
		echo '<p style="color: #D8000C;font-weight: bold;">Please Fill All The Details.</p>';
	}					
?>