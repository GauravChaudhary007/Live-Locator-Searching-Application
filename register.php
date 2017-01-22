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
<!-- < RegisterPage>-->

<form action="" method="POST" name="registrationForm">

	<div id="register-newuser">
		
		<table id="register-table">

			<tr>
				<td colspan='2' >
					<b>Register</b>
				</td>
			</tr>

			<tr>
				<td>
					Username :
				</td>
				<td>
					<input type='text' name="username" id="username">
				</td>
			</tr>

			<tr>
				<td>
					Password :
				</td>
				<td>
					<input type='password' name="password" id="password">
				</td>
			</tr>

			<tr>
				<td>
					Password :
				</td>
				<td>
					<input type='password' name="password_again" id="password_again">
				</td>
			</tr>
			
			<tr>
				<td colspan='2' >
					<div id='register-submit-button'> Submit </div>
				</td>
			</tr>
			
			<tr>
				<td colspan='2' >
					<div id='register-response'></div>
				</td>
			</tr>

		</table>

	</div>

</form>
<!-- </ RegisterPage>-->


	<script type="text/javascript" src='js/jquery.js'></script>
	<script type="text/javascript" src='js/registerPage.js'></script>

</body>
</html>