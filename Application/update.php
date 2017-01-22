<?php

session_start();
require_once '../include/dbconnect.php';
//Reterieving Values

$id 		= $_SESSION['id'];
$name		= $_REQUEST['name'];
$phone		= $_REQUEST['phone'];
$address 	= $_REQUEST['address'];
$email 		= $_REQUEST['email'];
$lat 		= $_REQUEST['lat'];
$lon 		= $_REQUEST['lon'];

if (empty($address)) {
	
}

//update
$check_user = mysql_query("SELECT * FROM `people` WHERE `id` = '$id'");
while ($check_user_data = mysql_fetch_array($check_user)) {
	mysql_query("UPDATE `people` SET `name`='$name',`phone`='$phone',`address`='$address',`email`='$email',`lat`='$lat',`lon`='$lon' WHERE `id` = '$id'") or  die(mysql_error());
	echo " Updated Successfully ";
	die;
}

$sql = mysql_query("INSERT INTO `people`(`id`,`name`,`phone`,`address`,`email`,`lat`,`lon`) VALUES ('$id' , '$name','$phone','$address','$email','$lat','$lon')");
if ($sql) {
	echo " Inserted Successfully ";
}


?>