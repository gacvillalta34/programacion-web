 function sumar(){
 var obtener_n1 = document.getElementById('numero1').value;
 var obtener_n2 = document.getElementById('numero2').value;
 var numero1 = parseInt(obtener_n1);
 var numero2 = parseInt(obtener_n2);
 var suma = numero1 + numero2;
   document.getElementById('sum').value=suma;
  }