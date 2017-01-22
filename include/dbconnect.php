<?php

	$dbHost = 'localhost';
	$dbName = 'livesearch';
	$dbUser = 'root';
	$dbPass = 'root';

	mysql_connect($dbHost,$dbUser,$dbPass) or die (mysql_error());
	mysql_select_db($dbName) or die (mysql_error()); 

?>