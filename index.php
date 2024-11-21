<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" type="image/gif" href="Imagenes/prueba2.png">
    <link rel="stylesheet" type="text/css" href="Estilos/style.css">
    <link rel="stylesheet" type="text/css" href="Estilos/style2.css">
    <link rel="stylesheet" type="text/css" href="Estilos/fonts.css">
    <link rel="stylesheet" type="text/css" href="Estilos/floating-wpp.min.css">
    <script type="text/javascript" src="Estilos/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="Estilos/floating-wpp.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Day</title>
</head>
<body style="color: white; background-color: rgb(255, 255, 255); background-image:url(Imagenes/fONDO_4.jpg);background-repeat: no-repeat; background-position: center 0%;" alink="#000099" link="#000099" vlink="#990099">

<div class="content">
	<header class="header">
		<div class="container logo-nav-container">
			<a href="https://amerike.edu.mx" class="nav-link"><img src="Imagenes/prueba1.png" width="200px" height="50px"></a>
			<nav class="navigation">
				<ul>
					<ol>
						<li><a href="terminos.php" class="nav-link">Términos y Condiciones</a></li>
						<li><a href="index.php">Registro</a></li>
					</ol>
				</ul>
			</nav>
		</div>
	</header>

	<br>
	<marquee id="ejemplo" direction="left"><strong>Participa en el concurso de un !REGALO SORPRESA! del Demo Day</strong></marquee>
	<hr>

	<center>
		<section>
		<form method="post" action="registro.php" onsubmit="return validateForm()">
			<section id="Registro">
				<h2>Registro</h2><br>
				<h3><label for="nombre"><strong>Nombre: </strong></label></h3>
				<input type="nombre" id="nombre" name="nombre" required><br><br><br>
				<h3><label for="correo_institucional"><strong>Correo Institucional: </strong></label></h3>
				<input type="email" id="correo_institucional" name="correo_institucional" required><br><br><br>
				<h3><label for="matricula"><strong>Matrícula: </strong></label></h3>
				<input type="text" id="matricula" name="matricula" required><br><br><br>
				<h3><label for="tipo"><strong>Escribe si eres docente, alumno o padre de familia </strong></label></h3>
				<select id="tipo" name="tipo" >
					<option value="Docente"> Docente</option>
					<option value="Alumno"> Alumno</option>
					<option value="Externo"> Externo</option>
				</select><br><br><br>
				
				<label>
					<input type="checkbox" id="aceptar_terminos" name="aceptar_terminos" required>
					<strong>Aceptas los términos y condiciones?</strong>
				</label><br><br>

				<input type="submit" name="submit" value="Enviar"> <a href="registro.php" class="nav-link" value="Enviar"></a>
			</section>
		</form>
	</center>

	<hr>
	<br>
		<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/parte1.png" alt="parte1" title="" id="wows1_0"/></li>
		<li><img src="data1/images/parte2.png" alt="parte2" title="" id="wows1_1"/></li>
		<li><img src="data1/images/parte3.png" alt="parte3" title="" id="wows1_2"/></li>
		<li><img src="data1/images/parte4.png" alt="parte4" title="" id="wows1_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data1/tooltips/parte1.png" alt="I_1"/>1</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/parte2.png" alt="I_2"/>2</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/parte3.png" alt="I_3"/>3</span></a>
		<a href="#" title=""><span><img src="data1/tooltips/parte4.png" alt="I_4"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:10%"><a href="http://wowslider.net">slider jquery</a> by WOWSlider.com v9.0</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section --><br>
	</div>

	<footer id="main-footer">
		<div id="footer-call-to-action">
			<div id="footer-bottom" class="container">
				<div class="copyright">
					<p>&copy; <?php echo date("Y"); ?> Ciberseguridad 5° Semestre</p>
					Siguenos en nuestras redes sociales<br>
					<nav>
						<ul>
							<a href="https://www.facebook.com/AmerikeMexico" class="nav-link"><span style="color: white;"><span class="icon-facebook2"></span></span></a>
							<a href="https://www.instagram.com/amerikemexico/" class="nav-link"><span style="color: white;"><span class="icon-instagram"></span></span></a>
							<a href="https://x.com/AmerikeMexico" class="nav-link"><span style="color: white;"><span class="icon-twitter"></span></span></a>
						</ul>
					</nav>
				</div>
				<nav id="footer-menu">
					<ul>
						<hgroup>
							<li><a href="https://amerike.edu.mx/quienes-somos/"> ¿Quiénes somos? </a></li><br>
							<li><a href="https://amerike.edu.mx/wp-content/uploads/2023/04/Reglamento.pdf"> Reglamento </a></li><br>
							<li><a href="https://amerike.edu.mx/trabaja-con-nosotros/"> Trabaja con nosotros </a></li><br>
							<li><a href="https://amerike.edu.mx/partners/"> Partners </a></li><br>
						</hgroup>
					</ul>
				</nav>
			</div>
		</div>
	</footer>

	<script>
		function validateForm() {
			var terms = document.getElementById("aceptar_terminos");
			if (!terms.checked) {
				alert("Debes aceptar los términos y condiciones antes de enviar el formulario.");
				return false;
			}
			return true;
		}
	</script>
</body>
</html>
