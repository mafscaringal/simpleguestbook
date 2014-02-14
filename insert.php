	<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
		$_name = $_POST['name'];
		$_email = $_POST['email'];
		$_message = $_POST['message'];
		
	 	$sql = mysql_query("INSERT INTO message(name, email, message, date_posted, is_approved) VALUES('$_name', '$_email', '$_message', current_date, 'N')");

		if($sql){
			echo "<script>alert('Message Sent!!');window.location.href='front-end.php'</script>";
			
		}else{
			echo 'errr';
		}
	 ?>
