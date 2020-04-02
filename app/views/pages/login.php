<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?php echo RUTA_URL; ?>/public/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>/public/css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Iniciar sesión
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nombre de usuario obligatorio">
						<span class="label-input100">Nombre de usuario</span>
						<input class="input100" type="text" name="username" placeholder="Escribe tu usuario...">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Contraseña obligatoria">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="Escribe tu contraseña...">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							¿Olvidó su contraseña?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Entrar
							</button>
						</div>
					</div>

				

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							¿Aún no cuenta con una cuenta?
						</span>

						<a href="Nuevo_usuario.html" class="txt2">
								Registrate aquí
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="<?php echo RUTA_URL; ?>/public/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo RUTA_URL; ?>/public/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo RUTA_URL; ?>/public/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo RUTA_URL; ?>/public/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo RUTA_URL; ?>/public/vendor/select2/select2.min.js"></script>
	<script src="<?php echo RUTA_URL; ?>/public/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo RUTA_URL; ?>/public/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo RUTA_URL; ?>/public/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?php echo RUTA_URL; ?>/public/js/main.js"></script>

</body>
</html>