<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type" />
<title>Sin título 1</title>
</head>

<body>
<?php
/*Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos oportunidades.
 En la página que se procesan los datos del formulario implementar una función que imprima un mensaje si las dos claves ingresadas son distintas.*/
 
 function compararpassword($p1,$p2)
 {
 if ($p1!=$p2)
 { 
  echo "Las contrase&ntilde;as son diferentes, vuelve a introducirlas";
 }
 }

 compararpassword($_REQUEST['pass1'],$_REQUEST['pass2']);
 
 ?>
 <h2>Se verificaron las claves ingresadas.</h2>
 
 
</body>

</html>
