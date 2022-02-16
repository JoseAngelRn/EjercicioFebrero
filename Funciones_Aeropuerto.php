<?php
INCLUDE_ONCE 'Arraysdb.php';

$EJ = 0;

#FUNCION MEDIA DE PASAJEROS------------------------------------------------------------------------------------------
function Media_Pasajeros($text, $array4, $EJ){
$contador = 0;
foreach ($array4 as $array_4) {
    $Pasajeros = $array_4["Pasajeros"];
    $Vuelos = $array_4["Vuelo"];

if ($Vuelos == $text) {
    $EJ = $EJ + $Pasajeros;
    $contador++;
    }
}
    $EJ = $EJ/$contador;
    echo "<strong>La media de pasajeros es: </strong>"."<br>".$EJ." personas"."<br>";
}

#FUNCIÓN SABER ULTIMOS DESTINO-------------------------------------------------------------------------------------------------
function Destinos($text, $array1){
    echo "<strong>Los destinos a los que ha ido el avión han sido: </strong>"."<br>";
foreach ($array1 as $array_1) {
    $Destino = $array_1["Destino"];
    $Vuelos = $array_1["Vuelo"];
    
if ($Vuelos == $text) {
    
    echo $Destino." ";
    }
}
    echo "<br>";
}

#FUNCIÓN SABER FABRICANTE-------------------------------------------------------------------------------------------
function Fabricante($text, $array2){
foreach ($array2 as $array_2) {
    $Fabricante = $array_2["Fabricante"];
    $Vuelos = $array_2["Vuelo"];

if ($Vuelos == $text) {
    echo "<strong>El fabricante es: </strong>"."<br>".$Fabricante."<br>";
    }
}
}

#FUNCIÓN SABER MINUTOS TOTALES DE VUELO----------------------------------------------------------------------------------
function Minutos_Totales_Vuelo($text, $array3, $EJ){
foreach ($array3 as $array_3) {
    $Duracion_Minutos = $array_3["Duracion_Minutos"];
    $Vuelos = $array_3["Vuelo"];

if ($Vuelos == $text) {
    $EJ = $EJ + $Duracion_Minutos;
    }
}
echo "<strong>Los minutos totales de vuelo han sido: </strong>"."<br>".$EJ." minutos"."<br>";
}

#FUNCIÓN MEDIA DE HORAS VOLADAS DE TODOS LOS VUELOS---------------------------------------------------------------------------
function Media_Horas_Total($array3, $EJ){
    $contador = 0;
    foreach ($array3 as $array_3) {
        $Duracion_Minutos = $array_3["Duracion_Minutos"];
    
        $EJ = $EJ + $Duracion_Minutos;
        $contador++;
    }
        $EJ = $EJ/$contador;
        $EJ = $EJ/60;
        echo "<strong>La media de horas voladas de todos los vuelos es: </strong>"."<br>".$EJ." Horas"."<br>";
    }

#FUNCIÓN NÚMERO TOTAL DE PASAJEROS DE TODOS LOS VUELOS---------------------------------------------------------------------------
function Numero_Total_Pasajeros($array4, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        
        $EJ = $EJ + $Pasajeros;
    }
    echo "<strong>El número total de pasajeros de todos los vuelos es: </strong>"."<br>".$EJ." personas"."<br>";
}

#FUNCIÓN PASAJEROS TOTALES POR AVION---------------------------------------------------------------------------
function Numero_Total_Pasajeros_Avion($array4, $text, $EJ){
    foreach ($array4 as $array_4) {
        $Pasajeros = $array_4["Pasajeros"];
        $Vuelos = $array_4["Vuelo"];
        
    if ($Vuelos == $text) {
        $EJ = $EJ + $Pasajeros;
        }
    }
    echo "<strong>El número total de pasajeros del avion: </strong>"."<br>".$EJ." personas"."<br>";
}

#FUNCIÓN NÚMERO DE AVIONES POR FABRICANTE---------------------------------------------------------------------------
function Aviones_fabricante($array2){
    $contador_Boeing = 0;
    $contador_Airbus = 0;

    foreach ($array2 as $array_2) {
        $Fabricante = $array_2["Fabricante"];
        
    if ($Fabricante == "Boeing") {
        $contador_Boeing++;
        }
    elseif($Fabricante == "Airbus"){
        $contador_Airbus++; 
        }
    }
    echo "<strong>Números aviones Boeing: </strong>"."<br>".$contador_Boeing."<br>";
    echo "<strong>Números aviones Airbus: </strong>"."<br>".$contador_Airbus."<br>";
}

#FUNCIÓN DESTINO CON MÁS CONEXIONES---------------------------------------------------------------------------
function Destino_mas($array1){
    $contador_Milan = 0;
    $contador_Roma = 0;
    $contador_Estambul = 0;
    $contador_Madrid = 0;
    $contador_Lima = 0;
    $contador_Bilbao = 0;

    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];
    if ($Destino == "Milán") {
        $contador_Milan++;
        }
    elseif($Destino == "Roma"){
        $contador_Roma++; 
        }
    elseif($Destino == "Estambul"){
        $contador_Estambul++; 
        }
    elseif($Destino == "Madrid"){
        $contador_Madrid++; 
        }
    elseif($Destino == "Lima"){
        $contador_Lima++; 
        }
    elseif($Destino == "Bilbao"){
        $contador_Bilbao++; 
        }
    }
    $array_nuevo =  array(
        array("Visitas" => $contador_Milan, "Destino" => "Milán"),
        array("Visitas" => $contador_Roma, "Destino" => "Roma"),
        array("Visitas" => $contador_Estambul, "Destino" => "Estambul"),
        array("Visitas" => $contador_Madrid, "Destino" => "Madrid"),
        array("Visitas" => $contador_Lima, "Destino" => "Lima"),
        array("Visitas" => $contador_Bilbao, "Destino" => "Bilbao")
        );
        
        rsort($array_nuevo);
        $columna = (array_column($array_nuevo, "Destino"));
        $maximo_columna = $columna[0];
        $mas = max($contador_Milan, $contador_Roma, $contador_Estambul, $contador_Madrid, $contador_Lima, $contador_Bilbao);    
    
    echo "<strong>El destino con mas conexiones es: </strong>"."<br>".$maximo_columna." con ".$mas." conexiones"."<br>";
}

#FUNCIÓN DESTINO CON MENOS CONEXIONES---------------------------------------------------------------------------
function Destino_menos($array1){
    $contador_Milan = 0;
    $contador_Roma = 0;
    $contador_Estambul = 0;
    $contador_Madrid = 0;
    $contador_Lima = 0;
    $contador_Bilbao = 0;
    $contador_Total = 0;

    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];

    if ($Destino == "Milán") {
        $contador_Milan++;
        }
    elseif($Destino == "Roma"){
        $contador_Roma++; 
        }
    elseif($Destino == "Estambul"){
        $contador_Estambul++; 
        }
    elseif($Destino == "Madrid"){
        $contador_Madrid++; 
        }
    elseif($Destino == "Lima"){
        $contador_Lima++; 
        }
    elseif($Destino == "Bilbao"){
        $contador_Bilbao++; 
        }
    }
        $array_nuevo =  array(
            array("Visitas" => $contador_Milan, "Destino" => "Milán"),
            array("Visitas" => $contador_Roma, "Destino" => "Roma"),
            array("Visitas" => $contador_Estambul, "Destino" => "Estambul"),
            array("Visitas" => $contador_Madrid, "Destino" => "Madrid"),
            array("Visitas" => $contador_Lima, "Destino" => "Lima"),
            array("Visitas" => $contador_Bilbao, "Destino" => "Bilbao")
            );
            echo "<strong>El destino con menos conexiones es: </strong>"."<br>";
            rsort($array_nuevo);
            $columna = (array_column($array_nuevo, "Destino"));
            $minimo_columna = $columna[0];
            $arrayCortado = (array_slice($array_nuevo, 2));
    
            foreach ($arrayCortado as $array_Cortado) {
                $o = $array_Cortado["Destino"];
                $minimo = min($contador_Milan, $contador_Roma, $contador_Estambul, $contador_Madrid, $contador_Lima, $contador_Bilbao);
                echo $o." con ".$minimo." conexiones"."<br>";
            }
}

#FUNCIÓN EL NÚMERO TOTALES DE CIUDADES VISITADAS---------------------------------------------------------------------------
function Numero_Ciudad_Total($array1){
        
    $columna = array_unique(array_column($array1, "Destino"));
    $fin = array_intersect_key($array1, $columna);

    echo "<strong>El número total de ciudades visitadas es: </strong>"."<br>".count($fin)." ciudades"."<br>";
}

#FUNCIÓN LAS VECES QUE SE HAN IDO A UNA DETERMINADA CIUDAD---------------------------------------------------------------------------
function Numero_Ciudad($array1){
        $contador_Milan = 0;
        $contador_Roma = 0;
        $contador_Estambul = 0;
        $contador_Madrid = 0;
        $contador_Lima = 0;
        $contador_Bilbao = 0;
    
        foreach ($array1 as $array_1) {
            $Destino = $array_1["Destino"];
        if ($Destino == "Milán") {
            $contador_Milan++;
            }
        elseif($Destino == "Roma"){
            $contador_Roma++; 
            }
        elseif($Destino == "Estambul"){
            $contador_Estambul++; 
            }
        elseif($Destino == "Madrid"){
            $contador_Madrid++; 
            }
        elseif($Destino == "Lima"){
            $contador_Lima++; 
            }
        elseif($Destino == "Bilbao"){
            $contador_Bilbao++; 
            }
        }
        echo "<strong>Veces que se ha ido a Milán: </strong>"."<br>".$contador_Milan."<br>";
        echo "<strong>Veces que se ha ido a Roma: </strong>"."<br>".$contador_Roma."<br>";
        echo "<strong>Veces que se ha ido a Estambul: </strong>"."<br>".$contador_Estambul."<br>";
        echo "<strong>Veces que se ha ido a Madrid: </strong>"."<br>".$contador_Madrid."<br>";
        echo "<strong>Veces que se ha ido a Lima: </strong>"."<br>".$contador_Lima."<br>";
        echo "<strong>Veces que se ha ido a Bilbao: </strong>"."<br>".$contador_Bilbao."<br>";
    }

#FUNCIÓN CUAL ES LA CIUDAD MÁS VISITADA---------------------------------------------------------------------------
function Ciudad_mas($array1){
    $contador_Milan = 0;
    $contador_Roma = 0;
    $contador_Estambul = 0;
    $contador_Madrid = 0;
    $contador_Lima = 0;
    $contador_Bilbao = 0;

    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];
    if ($Destino == "Milán") {
        $contador_Milan++;
        }
    elseif($Destino == "Roma"){
        $contador_Roma++; 
        }
    elseif($Destino == "Estambul"){
        $contador_Estambul++; 
        }
    elseif($Destino == "Madrid"){
        $contador_Madrid++; 
        }
    elseif($Destino == "Lima"){
        $contador_Lima++; 
        }
    elseif($Destino == "Bilbao"){
        $contador_Bilbao++; 
        }
    }
    $array_nuevo =  array(
    array("Visitas" => $contador_Milan, "Destino" => "Milán"),
    array("Visitas" => $contador_Roma, "Destino" => "Roma"),
    array("Visitas" => $contador_Estambul, "Destino" => "Estambul"),
    array("Visitas" => $contador_Madrid, "Destino" => "Madrid"),
    array("Visitas" => $contador_Lima, "Destino" => "Lima"),
    array("Visitas" => $contador_Bilbao, "Destino" => "Bilbao")
    );
    
    rsort($array_nuevo);
    echo "<strong>La ciudad más visitada es: </strong>"."<br>";
    $columna = (array_column($array_nuevo, "Destino"));
    $maximo_columna = $columna[0];
    echo $maximo_columna."<br>";
} 

#FUNCIÓN CUALES SON LAS CIUDADES MENOS VISITADAS---------------------------------------------------------------------------
function Ciudad_menos($array1){
    $contador_Milan = 0;
    $contador_Roma = 0;
    $contador_Estambul = 0;
    $contador_Madrid = 0;
    $contador_Lima = 0;
    $contador_Bilbao = 0;

    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];
    if ($Destino == "Milán") {
        $contador_Milan++;
        }
    elseif($Destino == "Roma"){
        $contador_Roma++; 
        }
    elseif($Destino == "Estambul"){
        $contador_Estambul++; 
        }
    elseif($Destino == "Madrid"){
        $contador_Madrid++; 
        }
    elseif($Destino == "Lima"){
        $contador_Lima++; 
        }
    elseif($Destino == "Bilbao"){
        $contador_Bilbao++; 
        }
    }
    $array_nuevo =  array(
        array("Visitas" => $contador_Milan, "Destino" => "Milán"),
        array("Visitas" => $contador_Roma, "Destino" => "Roma"),
        array("Visitas" => $contador_Estambul, "Destino" => "Estambul"),
        array("Visitas" => $contador_Madrid, "Destino" => "Madrid"),
        array("Visitas" => $contador_Lima, "Destino" => "Lima"),
        array("Visitas" => $contador_Bilbao, "Destino" => "Bilbao")
        );
        
        rsort($array_nuevo);
        echo "<strong>Las ciudades menos visitadas es: </strong>"."<br>";
        $columna = (array_column($array_nuevo, "Destino"));
        $minimo_columna = $columna[0];
        $arrayCortado = (array_slice($array_nuevo, 2));

        foreach ($arrayCortado as $array_Cortado) {
            $o = $array_Cortado["Destino"];
            echo $o." ";
        }
}

#FUNCIÓN MEDIA DE HORAS VOLADAS DE UN VUELO---------------------------------------------------------------------------
function Media_Horas($text, $array3, $EJ){
    $contador = 0;
    foreach ($array3 as $array_3) {
        $Duracion_Minutos = $array_3["Duracion_Minutos"];
        $Vuelos = $array_3["Vuelo"];
    
    if ($Vuelos == $text) {
        $EJ = $EJ + $Duracion_Minutos;
        $contador++;
        }
    }
        $EJ = $EJ/$contador;
        $EJ = $EJ/60;
        echo "<strong>La media de horas voladas es: </strong>"."<br>".$EJ." Horas"."<br>";
    }

    #FUNCIÓN MEDIA DE COMBUSTIBLE------------------------------------------------------------------------------------------------------------
    function Media_Combustible($text, $array5, $EJ){
        $contador = 0;
        foreach ($array5 as $array_5) {
            $Combustible = $array_5["Combustible"];
            $Vuelos = $array_5["Vuelo"];
        
        if ($Vuelos == $text) {
            $EJ = $EJ + $Combustible;
            $contador++;
            }
        }
            $EJ = $EJ/$contador;
            echo "<strong>La media de combustible del avión es: </strong>"."<br>".$EJ." Litros"."<br>";
        }

#FUNCIÓN MEDIA DE LOS MINUTOS TOTALES DE UN VUELO---------------------------------------------------------------------------------------------
    function Media_Minutos_Totales_Vuelo($text, $array3, $EJ){
        $contador = 0;
        foreach ($array3 as $array_3) {
            $Duracion_Minutos = $array_3["Duracion_Minutos"];
            $Vuelos = $array_3["Vuelo"];
            
        if ($Vuelos == $text) {
            $EJ = $EJ + $Duracion_Minutos;
            $contador++;
            }
        }
        $EJ = $EJ/$contador;
        echo "<strong>La media de los minutos totales del vuelo han sido: </strong>"."<br>".$EJ." minutos"."<br>";
        }

#FUNCIÓN CUALES SON LAS 3 CIUDADES MÁS VISITADAS---------------------------------------------------------------------------
function Ciudad_mas_3($array1){
    $contador_Milan = 0;
    $contador_Roma = 0;
    $contador_Estambul = 0;
    $contador_Madrid = 0;
    $contador_Lima = 0;
    $contador_Bilbao = 0;

    foreach ($array1 as $array_1) {
        $Destino = $array_1["Destino"];
    if ($Destino == "Milán") {
        $contador_Milan++;
        }
    elseif($Destino == "Roma"){
        $contador_Roma++; 
        }
    elseif($Destino == "Estambul"){
        $contador_Estambul++; 
        }
    elseif($Destino == "Madrid"){
        $contador_Madrid++; 
        }
    elseif($Destino == "Lima"){
        $contador_Lima++; 
        }
    elseif($Destino == "Bilbao"){
        $contador_Bilbao++; 
        }
    }
    $array_nuevo =  array(
    array("Visitas" => $contador_Milan, "Destino" => "Milán"),
    array("Visitas" => $contador_Roma, "Destino" => "Roma"),
    array("Visitas" => $contador_Estambul, "Destino" => "Estambul"),
    array("Visitas" => $contador_Madrid, "Destino" => "Madrid"),
    array("Visitas" => $contador_Lima, "Destino" => "Lima"),
    array("Visitas" => $contador_Bilbao, "Destino" => "Bilbao")
    );
    
    asort($array_nuevo);
    echo "<br>"."<strong>Las 3 ciudades más visitadas son: </strong>"."<br>";
    $columna = (array_column($array_nuevo, "Destino"));
    $arrayCortado = (array_slice($array_nuevo, 3));

    foreach ($arrayCortado as $array_Cortado) {
        $o = $array_Cortado["Destino"];
        echo $o." ";
} 
}

#VALIDAR PRECIO Y AÑADIR IVA-----------------------------------------------------------------------------
function ValidarPrecio($array9, $Importe, $text, $Maleta, $Codigo, $Divisa){

    foreach ($array9 as $array_9){
        $Precio = $array_9["Precio"];
        $Vuelo = $array_9["Vuelo"];

    if ($text == $Vuelo) {

        if ($Precio == $Importe) {
            echo "La cantidad introducida correcta, compra aceptada. ";
            $Importe = $Importe * 1.21;
            echo "El precio es: ".$Importe." €"." con IVA"."<br>";

            if ($Maleta == "Si") {
                $Importe = $Importe + 40;
                echo "Precio con la maleta facturada: ".$Importe." €"."<br>";

                if ($Codigo == "CESURHAZTEPRO") {
                    $Importe = $Importe / 1.15; 
                    echo "Código de descuento introducido. El precio es el siguiente: ".$Importe." €"."<br>";
                }
                else{
                    echo "No ha introducido ningun código de descuento. El precio es el siguiente: ".$Importe." €"."<br>";
                }
            }

            elseif ($Maleta == "No") {
                echo "No hay maleta facturada el precio sigue siendo: ".$Importe." €"."<br>";
                
                if ($Codigo == "CESURHAZTEPRO") {
                    $Importe = $Importe / 1.15; 
                    echo "Código de descuento introducido. El precio es el siguiente: ".$Importe." €"."<br>";
                }
                else{
                    echo "No ha introducido ningun código de descuento. El precio es el siguiente: ".$Importe." €"."<br>";
                }
            }
            }
        
        elseif ($Precio > $Importe) {
            $res= $Precio - $Importe;
            echo "La cantidad introducida es incorrecta, introduzca más dinero: ".$res." €"."<br>";
        }
        elseif ($Precio < $Importe) {
            $res = $Importe - $Precio;
            echo "La cantidad introducida es incorrecta, introduzca menos dinero: ".$res." €"."<br>";
        }
    }
}
    if ($Divisa == "Yen"){
        echo "El precio en Yen es: ".$Importe / 0.007576."<br>";
    }
    elseif ($Divisa == "USD") {
        echo "El precio en USD es: ".$Importe / 0.877732." $"."<br>";
    }
    elseif ($Divisa == "Sol Peruano"){
        echo "El precio en Sol Peruano es: ".$Importe / 0.24." S/"."<br>";
    }
    elseif ($Divisa == "Lira Turca"){
        echo "El precio en Lira Turca es: ".$Importe / 0.065." ₺"."<br>";
    }
}







?>