<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>muebleria</title>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
	<body>

        <!-- Header -->
			<header id="header">
            <h1><strong><a href="index.php">MUEBLERIA</a></strong> PABLO´S</h1>

			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
                    <h1>registro de nuevo usuario</h1>
					<form action="guardarUsuario.php" method="post">
					<div>
					<img src="images/avatar.png" alt="avatar">
                    </div>
                    <label>Nombre</label>
					<input type="text" name="nombre" placeholder="Captura tu nombre" required>
					<label>Usuario</label>
					<input type="text" name="usuario" placeholder="Captura tu usuario" required>
					<label >Contraseña</label>
					<input type="password" name="password" placeholder="captura tu contraseña" required>
					<input type="submit" value="Enviar">
					</form>					
				</div>
				
			</section>

		<!-- Footer -->
        <footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"></a></li>
						<li><a href="#" class="icon fa-twitter"></a></li>
						<li><a href="#" class="icon fa-instagram"></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; UNACH</li>
						<li>Design: <a href="#">LSC</a></li>
						
					</ul>
				</div>
			</footer>
			
		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>