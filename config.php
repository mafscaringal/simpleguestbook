<?php 
	/*
	* Array $config(configuration) for the Datas
	* Building Connection to the Database
	* Selwcting of Database
	*/
	$config = array('file' => 'localhost', 'username' => 'root', 'password' => '', 'database' => 'messaging' );
	mysql_connect($config['file'], $config['username'], $config['password']);
	mysql_select_db($config['database']);
 ?>