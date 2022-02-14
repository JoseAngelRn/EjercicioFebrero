<?php
INCLUDE_ONCE 'Funciones_Aeropuerto.php';

#REPRESENTACIÓN
echo "<body style='background-color: rgb(227, 230, 233);'></body>";
echo "<h2 style='color:#2d4b6e;'>"."Validación"."</h2>";

$validaEmail = $_POST["Email"];

if (filter_var($validaEmail, FILTER_VALIDATE_EMAIL)) {
    echo "EL correo es valido";
}else{
    echo "El correo NO es valido";
}

?>