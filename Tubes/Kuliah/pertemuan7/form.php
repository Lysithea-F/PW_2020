<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<style type="text/css">
		.daftar {
			margin-right: 50px;
		}
	</style>
</head>
<body>
	<form method="post" action="result.php">
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
				<td><button type="Submit">Login</button></td>
				<td class="daftar"><button type="Submit">Daftar</button></td>
			</tr>
		</table>
	</form>
</body>
</html>