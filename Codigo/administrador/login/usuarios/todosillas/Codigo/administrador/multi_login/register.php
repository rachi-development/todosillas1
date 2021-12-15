<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>Usuario</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Contrasena</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirmar contrasena</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		¿Ya tienes cuenta? <a href="login.php">Iniciar sesión</a>
	</p>
</form>
</body>
</html>
