<html>
<head>
<title>Pérfil</title>
<!-- <link rel="stylesheet" href="slide.css"/> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
/></script>
<meta charset="UTF-8">
<link rel="shortcut icon" href="images/cedij.jpeg">
</head>
<body>
	<!-- Inicio de contenido maincontent -->
	 <div class="row">
	  <div class="span6" align="right">
	  <button class="btn btn-primary" onclick="window.location='https://www.facebook.com/'">Facebook</button>
	  <button class="btn btn-danger" onclick="window.location='http://youtube.com'">YouTube</button>
	  <button class="btn btn-success" onclick="window.location='https://twitter.com/'">Twitter</button>
	  </div>
     </div>
	<!-- Fin de maincontent -->
	<?php
	if(isset($_POST['enviar'])){
	$user_valid = "AaronCV26";
	$pass_valid = "12345678";
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	if($user_valid == $user && $pass_valid == $pass){
	?>
	<img src="images/cedij.jpeg" width="1400" height="500"/>
	<?php
			}
	else{
	echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
	echo '<script> window.location="operaciones.php"; </script>';
		}
	}
	?>
	<br>
	<!-- Fin de contenido maincontent -->
	<!-- Inico de container-1 -->
	<div align="center">
      <div class="container-1">
	  <h1>Multimedia</h1>
        <div class="row">
		<div class="span6">
		<iframe width="400" height="315" src="https://www.youtube.com/embed/10GHKjgQIR0"
		allowfullscreen></iframe>
		<iframe width="400" height="315" src="https://www.youtube.com/embed/ykGRYEX0n60"
		allowfullscreen></iframe>
		<iframe width="400" height="315" src="https://www.youtube.com/embed/8cSo0ijtkzU" 
		 allowfullscreen></iframe>
		 </div>
        </div>
      </div>
	  <!-- Fin de contenido container-1 -->
	  <!-- Inicio container-2 -->
	   <div class="container-2">
	  <h1>Redireccionamiento</h1>
	  <button class="btn btn-primary" onclick="window.location='https://www.facebook.com/'">Facebook</button>
	  <button class="btn btn-danger" onclick="window.location='http://youtube.com'">YouTube</button>
	  <button class="btn btn-info" onclick="window.location='https://twitter.com/'">Twitter</button>
	  <!-- Fin de container-2 -->
		</div>
     </div>
</body>
</html>