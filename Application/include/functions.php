<?php
session_start();

	function validate(){
		if (!isset($_SESSION['id'])) {
			header('Location:../index.php');
		}
	}
	
?>