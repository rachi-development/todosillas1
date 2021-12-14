<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Usuario</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Contrasena</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			¿No estás registrado? <a href="register.php">Registrate</a>
		</p>
	</form>
</body>
</html>