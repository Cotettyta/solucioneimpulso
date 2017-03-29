<?php
	$destino= "maryjosuazo@gmail.com";
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$empresa = $_POST["empresa"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre . "\nCorreo: " . $ncorreo . "\nEmpresa: " . $empresa . "\nMensaje: " .$mensaje;
	mail($destino,"contacto", $contenido);
	header("location:index.html")
?>