<?php
INCLUDE_ONCE 'Funciones_Aeropuerto.php';

#REPRESENTACIÓN
echo "<body style='background-color: rgb(227, 230, 233);'></body>";
echo "<h2 style='color:#2d4b6e;'>"."Las estadisticas de las ciudades son: "."</h2>";
Numero_Ciudad_Total($array1);
Numero_Ciudad($array1);
Ciudad_mas($array1);
Ciudad_menos($array1);
Ciudad_mas_3($array1);

?>