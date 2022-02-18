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
$Divisa = $_POST["Divisa"];


if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    echo "EL correo es valido"."</br>";

    $fichero = fopen("Billete.txt","w+");

    if ($fichero == false) {
        echo "Error no se ha creado el fichero "."<br>";
    } else {
        echo "Se ha creado el fichero correctamente"."<br>";
        fwrite($fichero,Origen()."\r\n");
        fwrite($fichero,NombreCiudadDestinoAeropuerto($array9, $array8, $text)."\r\n");
        fwrite($fichero,NombreCiudadDestino($array9, $text)."\r\n");
        fwrite($fichero,SalidaVuelo($array6, $text)."\r\n");
        fwrite($fichero,TiempoRestante($array6, $text)."\r\n");
        fwrite($fichero,RANDOM($Maleta)."\r\n");
        fwrite($fichero,ValidarPrecio($array9, $Importe, $text, $Maleta, $Codigo, $Divisa)."\r\n");
        fwrite($fichero,Descuento($Codigo)."\r\n");
        fwrite($fichero,AvionNombre($array7, $text)."\r\n");
        fwrite($fichero,FabricanteNombre($array7, $text)."\r\n");
        fflush($fichero);
    }
    
    fclose($fichero);
    

}else{
    echo "El correo NO es valido"."</br>";
}

?>
