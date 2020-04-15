<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>muebleria</title>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<p><h1><strong><a href="../index.php">MUEBLERIA</a></strong> PABLO´S</h1></p>
				<br>
				<img src="img/logo.png" align="left" width="200px" heigth="200px" >
				
				<nav id="nav">
				<br>
					<br><ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="nosotros.php">Nosotros</a></li>
						<li><a href="inventarios/inventarios.php">Inventario</a></li>	
						<li><a href="pedidos/pedidos.php">Pedidos</a></li>																						
						<li><a href="contactanos.php">Contáctanos</a></li>					
					</ul>
				</nav>
			</header>

			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
		<section id=banner
		>
				<h2>MUEBLERIA PABLO´S</h2>
				<p>Contamos con un extenso surtido en muebles para toda tu casa.<br /> </p>
				<ul class="actions">
					<li><a href="login.php" class="button special big">Regístrate</a></li>
				</ul>
			</section>

			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Nuestro globos</h2>
						</header>
						<div>
							<table>
							<tr>
								<th>ID</th>
								<th>NOMBRE</th>
								<th>DESCRIPCION</th>
								<th>TIPO</th>
								<th>PRECIO</th>
								<th>EXISTENCIA</th>
								<th></th>
							</tr>
							<?PHP
								include_once 'conexion.php';
								$mysqlConexion=new mysqli($servidorBD,$usuarioBD,$claveBD,$nombreBD);
								$consulta="Select * from mueble";
								$resultado=$mysqlConexion->query($consulta);
								while($registro=$resultado->fetch_assoc())
								{
									?>
									<tr>
										<td><?PHP echo $registro["Idmueble"];?></td>
										 <td><?PHP echo $registro["Nombre"];?></td>
										 <td><?PHP echo $registro["Descripcion"];?></td>
										 <td><?PHP echo $registro["Tipo"];?></td>
										 <td><?PHP echo $registro["Precio"];?></td>
										 <td><?PHP echo $registro["Existencia"];?></td>
										 <td><img src="img/banner.jpg" width="100px" heigth="100px"></td>
										 <td><a href=""><img src="img/Comprar.png" alt=""> </a></td>
									</tr>
									<?PHP
								}
								
							?>
							</table>
						</div>
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