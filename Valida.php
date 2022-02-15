<?php
INCLUDE_ONCE 'Funciones_Aeropuerto.php';

#REPRESENTACIÓN
echo "<body style='background-color: rgb(227, 230, 233);'></body>";
echo "<h2 style='color:#2d4b6e;'>"."Validación"."</h2>";

$Nombre = $_POST["Nombre"];
$Apellidos = $_POST["Apellidos"];
$DNI = $_POST["DNI"];
$Email = $_POST["Email"];
$Codigo = $_POST["Codigo"];
$Importe = $_POST["Importe"];
$Maleta = $_POST["Maleta"];
$text = $_POST["Mostrar_Vuelos"];

if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    echo "EL correo es valido"."</br>";
}else{
    echo "El correo NO es valido"."</br>";
}

ValidarPrecio($array9, $Importe, $text);

$fichero = fopen("Ticket.txt","w+");

if ($fichero == false) {
    echo "Error no se ha creado el fichero "."<br>";
} else {
    echo "Se ha creado el fichero correctamente"."<br>";
    fwrite($fichero,"Nombre: ");
    fwrite($fichero, $Nombre."\r\n");
    fwrite($fichero,"Apellidos: ");
    fwrite($fichero, $Apellidos."\r\n");
    fwrite($fichero,"DNI: ");
    fwrite($fichero, $DNI."\r\n");
    fwrite($fichero,"Email: ");
    fwrite($fichero, $Email."\r\n");
    fwrite($fichero,"Código: ");
    fwrite($fichero, $Codigo."\r\n");
    fwrite($fichero,"Importe: ");
    fwrite($fichero, $Importe."\r\n");
    fwrite($fichero,"Maleta: ");
    fwrite($fichero, $Maleta."\r\n");
    fflush($fichero);
}

echo readfile("Ticket.txt");
fclose($fichero);
?>