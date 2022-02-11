<?php
INCLUDE_ONCE 'Funciones_Aeropuerto.php';

#RECOGIDA DE VARIABLES
$text = $_POST["Capacidad_combustible"];


#REPRESENTACIÓN
echo "<body style='background-color: rgb(227, 230, 233);'></body>";
echo "<h2 style='color:#2d4b6e;'>"."El vuelo elegido ha sido: ".$text."</h2>";

Media_Combustible($text, $array5, $EJ);
?>