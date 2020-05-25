<?php
$Nombre = $_POST['Nombre'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$peso = $_POST['peso'];
$talla = $_POST['talla'];
$destinatario = "javiergalvezsordones@gmail.com";
$asunto = "DC:Tamizaje por COVID-19";
$carta = "De: $Nombre \n";
$carta .= "DNI: $dni \n";
$carta .= "Edad: $edad \n";
$carta .= "Su peso es: $peso \n";
$carta .= "Su talla es: $talla";
mail($destinatario, $asunto, $carta);
header('Location:mensaje.html');
?>
