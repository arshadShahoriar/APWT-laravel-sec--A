<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form action="login" method="POST">
		
		<?php echo csrf_field(); ?>		

		<fieldset>
			<legend>Login</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		</fieldset>

	</form>
</body>
</html><?php /**PATH F:\apwt_laravel\example-app\resources\views/login.blade.php ENDPATH**/ ?>