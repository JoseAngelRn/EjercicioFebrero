<?php
INCLUDE_ONCE 'Funciones_Aeropuerto.php';

#RECOGIDA VARIABLES
$text = $_POST["Estadisticas_avion"];

#REPRESENTACIÓN
echo "<body style='background-color: rgb(227, 230, 233);'></body>";
echo "<h2 style='color:#2d4b6e;'>"."El avión elegido ha sido: ".$text."</h2>";
Destinos($text, $array1);
Fabricante($text, $array2);
Minutos_Totales_Vuelo($text, $array3, $EJ);
Media_Horas($text, $array3, $EJ);
Media_Pasajeros($text, $array4, $EJ);
Numero_Total_Pasajeros_Avion($array4, $text, $EJ);
Media_Minutos_Totales_Vuelo($text, $array3, $EJ);
?>