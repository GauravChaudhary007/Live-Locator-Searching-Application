<?php 
	require_once '../include/dbconnect.php';
	require_once 'include/functions.php';

	validate();
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>** Live Search Project **</title>

	


	<!-- Style Sheets -->
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/edit.css">

	<!-- Js Files-->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src="js/locationpicker.jquery.min.js"></script>
    

</head>
<body>
<div class="navbar">
	<ul id="navbar">
	<li id="message"></li>
		<li>Welcome , 
			<font color='red'>
				<?php
					$id = $_SESSION['id'];
					$sql = mysql_query("SELECT * FROM `users` WHERE `id`= '$id'");
					$data = mysql_fetch_array($sql);
					echo "<b>".$data['username']."</b>";
				?>
			</font>
		</li>
		<li><a href="home.php">Home</a></li>
		<li><a href="edit.php?uName=<?php echo $data['username']; ?>">Edit</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>

</div>
