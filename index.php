<html>
<head>
<title>Login</title>
<link href="estilo.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
crossorigin="anonymous"></script>
<meta charset="UTF-8">
<link rel="shortcut icon" href="images/cedij.jpeg">
</head>
<body>
<div class="content"> 
<div align="center">
<h1>Iniciar sesión</h1>
<form action="recibir.php" method="POST">
<img src="images/cedij.jpeg" width="500" height="300"/>
<br>
<input type="text" placeholder="Ingrese su usuario"	
name="user"/>
<input type="password" placeholder="Ingrese su contraseña"
name="pass"/>
<input type="submit" class="btn btn-success" name="enviar" value="Enviar"/>
</form>
</div>
</div>
</body>
</html>