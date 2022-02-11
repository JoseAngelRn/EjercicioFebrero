<?php
INCLUDE_ONCE 'Funciones_Aeropuerto.php';

#REPRESENTACIÓN
echo "<body style='background-color: rgb(227, 230, 233);'></body>";
echo "<h2 style='color:#2d4b6e;'>"."Las estadisticas del aeropuerto son: "."</h2>";
Media_Horas_Total($array3, $EJ);
Numero_Total_Pasajeros($array4, $EJ);
Aviones_fabricante($array2);
Destino_mas($array1);
Destino_menos($array1);

?>