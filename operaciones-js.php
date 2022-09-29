<html>
<head>
<title>Contenido</title>
<link href="estilo.css" rel="stylesheet">
<meta charset="UTF-8">
</head>
<body>
<div align="center">
<h1>Sumando números</h1>
 <form action="" method="POST">
 <input type="text" id="numero1"/>
 <input type="text" id="numero2"/>
 <input type="text" id="sum"/>
 <input type="text" id="res"/>
 <input type="text" id="mult"/>
 <input type="text" id="div"/>
 <input type="button" onclick="sumar()" value="Sumar"/>
 <script>
 function sumar(){
 var obtener_n1 = document.getElementById('numero1').value;
 var obtener_n2 = document.getElementById('numero2').value;
 var numero1 = parseInt(obtener_n1);
 var numero2 = parseInt(obtener_n2);
 var suma = numero1 + numero2;
 var res = numero1 - numero2;
 var mult = numero1 * numero2;
 var div = numero1 / numero2;
   document.getElementById('sum').value=suma;
   document.getElementById('res').value=res;
   document.getElementById('mult').value=mult;
   document.getElementById('div').value=div;
  }
 </script>
</form>
</div>
</body>
</html>