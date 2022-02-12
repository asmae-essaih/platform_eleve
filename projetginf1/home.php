<!DOCTYPE HTML>
<html>

<body>

	<h1> LISTE DES ELEVES </h1>
	<table align="center">

		<form action="signin.php" method="post">
			<tr>
				<td>login </td>
				<td> <input type="text" name="login" value=<?php $login ?>></td>
			</tr>
			<tr>
				<td> Mot de passe</td>
				<td> <input type="password" name="passwd" value=<?php $passwd ?>> </td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="signin" value="sign in">
				</td>
			</tr>
			<tr>
				<td>
					<button><a href="formsignup.php"> SIGN UP </button>
				</td>
			</tr>

		</form>
	</table>
</body>

</html>