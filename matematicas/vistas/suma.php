<?php
//INICIO
//Entrada
error_reporting(0);
//variables entrada e inicializacion
$num1=0;
$num2=0;
//variables salida e inicializacion
$suma=0;
//Proceso
if (isset($_POST['btnCalcular'])) {
	$num1 = $_POST['txtNum1'];
	$num2 = $_POST['txtNum2'];
	$suma = $num1 + $num2;
}
//Salida, estara en el html
//FIN
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index,follow">
	<meta name="author" content="Jean">
	<meta name="description" content="suma de dos numeros">
	<meta name="keywords" content="suma">
	<title>Suma</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
	<link rel="icon" type="image/ico" href="../icono/sum.ico">
</head>
<body>
	<video id="video" autoplay loop muted>
		<source src="../videos/suma.mp4" type="video/mp4">
	</video>
	<section class="logo">
		<figure>
			<img class="img" src="../imagenes/logo.jpg">
			<figcaption class="figcaption">BIENVENIDO A LA SUMA</figcaption>
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
		<section align="center">
			<figure>
				<img class="suma" src="../imagenes/suma.png">
			</figure>
		</section>
	</header>
	<main>
		<form method="post" action="suma.php">
			<table class="table1" border="0" width="40%" align="center">
				<tr>
					<td>Ingrese Primer Número</td>
					<td><input type="text" name="txtNum1" value="<?=$num1?>"  placeholder="Ingrese datos"></td>
				</tr>
				<tr>
					<td>Ingrese Segundo Número</td>
					<td><input type="text" name="txtNum2" value="<?=$num2?>"  placeholder="Ingrese datos"></td>
				</tr>
				<tr>
					<td>La Suma es</td>
					<td><input type="text" name="txtSuma" value="<?=$suma?>"  placeholder="Resultado" readonly></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="calcular" type="submit" name="btnCalcular" value="Calcular"></td>
				</tr>
			</table>
		</form>
	</main>
	<footer>
		
	</footer>
</body>
</html>