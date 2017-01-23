<?
$para = "ingsebastianlopezm@gmail.com";
$nombre = $_POST["nombre"];
$asunto = "Nuevo contacto de la pagina";
$de = $_POST["email"];
$mensaje = $POST_["mensaje"];

//Evitar spam
$headers = "MIME-Version:1.0;\r\n";
$headers .= "Content-type: text/html; \r\n charset=iso-8859-1";
$deaders .= "From: $de \r\n";
$headers .= "To: $para; \r\n Subject:$asunto \r\n";

if(mail($para,$asunto,$mensaje,$headres))
	echo "Enviado correctamente";
else
	echo "Fallo de envio";

?>