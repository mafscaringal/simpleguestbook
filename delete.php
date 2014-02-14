<?php 
	/*
	* building connection to cobfig.php
	* creating new object
	*/
	include "config.php";
	$id = $_GET['id']; 
	 $sql = "DELETE FROM message where id = {$id}";
     $result = mysql_query($sql);
    if ($result) {
    	echo "<script>alert('Successfully Deleted!!');window.location.href='back-end.php';</script>";
    } else {
    	echo "<script>alert('Failed!');window.location.href='back-end.php';</script>";
    }
	
 ?>


