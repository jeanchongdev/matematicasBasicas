<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Jean Pierre">
	<meta name="description" content="sistema numericos">
	<meta name="keywords" content="suma, resta, multiplicaion, divicion">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="icon" type="image/ico" href="icono/iconito.ico">
	<title>Ejercicios Basicos</title>
</head>
<body>
	<video id="video" autoplay loop muted>
		<source src="videos/fondo.mp4" type="video/mp4">
	</video>
	<header>
		<section class="logo">
			<figure>
				<img class="img" src="imagenes/logo.jpg">
				<figcaption>EJERCICOS MATEMÁTICOS</figcaption>
			</figure>
		</section>
		<nav class="menu">
			<ul>
				<li>
					<a href="">Inicio</a>
				</li>
				<li>
					<a href="vistas/suma.php">Suma</a>
				</li>
				<li>
					<a href="vistas/resta.php">Resta</a>
				</li>
				<li>
					<a href="vistas/multiplicacion.php">Multiplicación</a>
				</li>
				<li>
					<a href="vistas/division.php">Division</a>
				</li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<h2>MI BLOG PERSONAL</h2>
			<form method="post" action="index.php">
				<label for="nombre" class="cajas">
					<span>Ingresa Tu Nombre</span>
					<input type="txt" name="txtNombre" placeholder="Aqui Tu Nombre">
				</label>
				<label for="apellido" class="cajas">
					<span>Ingresa Tu Apellido</span>
					<input type="txt" name="txtApellido" placeholder="Aqui Tu Apellido">
				</label>
				<label for="direccion" class="cajas">
					<span>Su Dirección</span>
					<input type="txt" name="txtDireccion" placeholder="Aqui Tu Dirección">
				</label>
				<label for="telefono" class="cajas">
					<span>Telefono</span>
					<input type="txt" name="txtTelefono" placeholder="Aqui Su Telefono">
				</label>
				<label for="edad" class="cajas">
					<span>Edad</span>
					<input type="number" name="txtEdad" placeholder="Aqui Su Edad">
				</label>
				<label for="correo" class="cajas">
					<span>Correo Electronico</span>
					<input type="email" name="txtCorreo" placeholder="Aqui Su Correo">
				</label>
				<label for="carrera" class="cajas">
					<span>Carrera</span>
						<select>
							<option value="software">Ingeniera De Software Con IA</option>
							<option value="informatica">Ingenieria Informatica</option>
							<option value="mecanico">Mecánico Automotriz</option>
							<option value="motores">Mecanica De Motores Menores</option>
							<option value="empresa">Administración De Empresa</option>
							<option value="turismo">Guía Oficial De Turismo</option>
							<option value="seguridad">Seguridad Industrial</option>
							<option value="Industrial">Mecatrónica Industrial</option>
							<option value="diseño">Diseño Gráfico Digital</option>
							<option value="soldador">Soldador Universal</option>
							<option value="electrisita">Electricidad Industrial</option>
						</select>
				</label>
				<label for="civil" class="cajas">
					<span>Estado Civil</span>
						<select>
							<option value="soltero">Soltero</option>
							<option value="casado">Casado</option>
							<option value="viudo">Viudo</option>
							<option value="adornado">Adornado</option>
						</select>
				</label>
				<input type="submit" class="boton" id="botonIni" name="btnSeccion" value="Iniciar">
				<input type="reset" class="boton" id="botonLim" name="btnLimpiar" value="Limpiar">
			</form>
		</section>
	</main>
	<hr>
	<footer>
		<h3 class="h3">Visitanos en</h3>
		<section class="pies">
			<ul>
				<li>
					<a href="">
						<img src="imagenes/facebook.png" width="30px">
					</a>
					<!--<a href="">Facebook</a>-->
				</li>
				<li>
					<a href="">
						<img src="imagenes/instagram.png" width="30px">
					</a>
				</li>
				<li>
					<a href="">
						<img src="imagenes/twitter.png" width="30px">
					</a>
				</li>
				<li>
					<a href="">
						<img src="imagenes/linkedin.png" width="30px">
					</a>
				</li>
				<li>
					<a href="">
						<img src="imagenes/github.png" width="30px">
					</a>
				</li>
			</ul>
		</section>
		<h3 class="h">Nuestra Dirección</h3>
		<section>
			<label class="pies1">
				<span>Empresa</span>
				<span>************</span>
			</label>
			<label class="pies1">
				<span>Dirección</span>
				<span>***********</span>
			</label>
			<label class="pies1">
				<span>Telefono</span>
				<span>**********</span>
			</label>
			<label class="pies1">
				<span>Correo</span>
				<span>*********</span>
			</label>
		</section>
	</footer>
</body>
</html>

<!--option butom en html
radio butom-->