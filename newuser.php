<?php

	require_once 'include/dbconnect.php';

	$uName = $_REQUEST['uName'];
	$uPass = $_REQUEST['uPass'];

	if (empty($uName)) {
		echo "<b class='highlight'>Username Can't Be Empty</b>";
		die;
	}

	if(empty($uPass)){
		echo "<b class='highlight'>Please Enter Your Password</b>";
		die;
	}

	$check_user_query = mysql_query("SELECT * FROM `users` WHERE `username` = '$uName'");
	if (!$check_user_data = mysql_fetch_array($check_user_query)) {
		
		$insert_user_query = mysql_query("INSERT INTO `users` (`username`,`password`) VALUES ( '$uName' , '$uPass')");

		if ($insert_user_query) {
			echo "<b class='highlight'>Success ! </b><a href='index.php'> Click Here To Login </a>";
		}
	
	} else {
		echo "<b class='highlight'>User Already Exist</b>";
	}

?>