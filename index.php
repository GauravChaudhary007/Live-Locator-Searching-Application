<?php require_once 'include/dbconnect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title> ** LOGIN Page</title>
	<link type="text/css" rel="stylesheet" href='css/body.css' ></link>
	<link type="text/css" rel="stylesheet" href='css/animate.css' ></link>
	<link type="text/css" rel="stylesheet" href='css/loginPage.css' ></link>
	<link type="text/css" rel="stylesheet" href='css/register.css' ></link>
</head>
<body>

<form action="" name="loginForm" method="POST">

	<div id="login-page-container">

		<table id='login-table'>

			<tr>
				<td colspan='2' >
					<b> LOGIN  </b>
				</td>
			</tr>

			<tr>
				<td>
					Username :
				</td>
				<td>
					<input type='text' name="username" id="uname">
				</td>
			</tr>

			<tr>
				<td>
					Password :
				</td>
				<td>
					<input type='password' name="password" id="passwd">
				</td>
			</tr>

			<tr>
				<td colspan='2' >
					<div id='login-submit-button'> Submit </div>
				</td>
			</tr>

			<tr>
				<td colspan='2' >
					<span id="login-response"></span>
				</td>
			</tr>

			<tr>
				<td colspan='2' >
					<a href='register.php' id='login-newuser'> New User </a>
				</td>
			</tr>

		</table>

	</div>

</form>
	<script type="text/javascript" src='js/jquery.js'></script>
	<script type="text/javascript" src='js/loginPage.js'></script>

</body>
</html>