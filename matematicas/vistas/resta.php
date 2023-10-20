<?php
//iniico
//entrada
error_reporting(0);
//variables entrada e inicializacion
$num1=0;
$num2=0;
//variables salida e inicializacion
$resta=0;
//procrso
if (isset($_POST['btnCalcular'])) {
	$num1 = $_POST['txtNum1'];
	$num2 = $_POST['txtNum2'];
	$resta = $num1 - $num2;
}
//salida
//FIN
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Jean">
	<meta name="description" content="resta de dos numeros">
	<meta name="keywords" content="resta">
	<title>Resta</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
	<link rel="icon" type="image/ico" href="../icono/res.ico">
</head>
<body>
	<video id="video" autoplay loop muted>
		<source src="../videos/resta.mp4" type="video/mp4">
	</video>
	<section class="logo">
		<figure>
			<img class="img" src="../imagenes/logo.jpg">
			<figcaption class="figcaption1">BIENVENIDO A LA RESTA</figcaption>
		</figure>
	</section>
	<nav class="menu">
		<ul>
			<li>
				<a href="../index.php">Inicio</a>
			</li>
			<li>
				<a href="../vistas/suma.php">Suma</a>
			</li>
			<li>
				<a href="../vistas/resta.php">Resta</a>
			</li>
			<li>
				<a href="../vistas/multiplicacion.php">Multiplicación</a>
			</li>
			<li>
				<a href="../vistas/division.php">Division</a>
			</li>
		</ul>
	</nav>
	<header>
		<section>
			<figure>
				<img class="resta" src="../imagenes/resta.png">
			</figure>
		</section>
	</header>
	<main>
		<form method="post" action="resta.php">
			<table class="table2" border="0" width="40%" align="center">
				<tr>
					<td>Ingrese Primer Número</td>
					<td><input type="txt" name="txtNum1" value="<?=$num1?>" placeholder="Ingrese datos"></td>
				</tr>
				<tr>
					<td>Ingrese Segundo Número</td>
					<td><input type="txt" name="txtNum2" value="<?=$num2?>" placeholder="Ingrese datos"></td>
				</tr>
				<tr>
					<td>La Resta es</td>
					<td><input type="txt" name="txtResta" value="<?=$resta?>" placeholder="Ingrese datos" readonly></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="calcular1" type="submit" name="btnCalcular" value="Calcular"></td>
				</tr>
			</table>
		</form>
	</main>
	<footer>
		
	</footer>
</body>
</html>