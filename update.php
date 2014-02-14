<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	$sql = mysql_query("UPDATE message SET is_approved = 'Y' where id = $id");

	if ($sql) {
		echo "<script>alert('Message Approved!!');window.location.href='back-end.php';</script>";
	}else {
		echo "<script>alert('Message not Approved!!');window.location.href='back-end.php';</script>";
	}
 ?>