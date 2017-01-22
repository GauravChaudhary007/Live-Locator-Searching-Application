<?php

require_once 'include/dbconnect.php';

$uName = $_REQUEST['uName'];
$uPass = $_REQUEST['uPass'];

// < validation>
if (strlen($uName)==0) {
	echo "Error_0";
	die;
}

if (strlen($uPass)==0) {
	echo "Error_1";
	die;
}
// </ validation>


$check_user_query = mysql_query("SELECT * FROM `users` WHERE `username` = '$uName' AND `password` = '$uPass'");

if($userExist = mysql_fetch_array($check_user_query)){

	session_start();
	$_SESSION['id'] = $userExist['id'];;
	
	echo "Error_2";
} else {
	echo "Error_3";
}

?>