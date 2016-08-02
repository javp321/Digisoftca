<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<META HTTP-EQUIV="REFRESH" content=".1;URL=recibido.html"> 
	<title>Document</title>
</head>
<body>

<?php 

// VARIABLES

$name=$_POST['name'];
$company=$_POST['company'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$information=$_POST['information'];

// VARIABLES SECUNDARIAS

$recibo="javp321@gmail.com";
$asunto="Caramontech Web";
$mensaje="Información recibida de la página web"."\n"."\n".
"Nombre / Name: ".$name."\n"."\n".
"Company / Compañia: ".$company."\n"."\n".
"E-mail / Correo electrónico: ".$email."\n"."\n".
"Phone / Teléfono: ".$phone."\n"."\n".
"Information / Información: ".$information;

// MAIL

mail($recibo, $asunto, $mensaje);


?>
	
</body>
</html>