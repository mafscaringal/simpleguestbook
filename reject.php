<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	$sql = mysql_query("UPDATE message SET is_approved = 'N' where id = {$id}");

	if ($sql) {
		echo "<script>alert('Message Rejected!!');window.location.href='back-end.php';</script>";
	} else {
			echo "<script>alert('Failed!!');window.location.href='back-end.php';</script>";

	}
 ?>