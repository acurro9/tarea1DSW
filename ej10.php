<?php

$num="1,2,3,4,5,5,3,8,6,7,8,9";
//Se separa el string en un array de números
$arrayNum=explode(",", $num);
//Se eliminan del array los números repetidos.
$arrayUnico=array_unique($arrayNum);
//Se vuelve a unir el array en un string separado por comas
$numUnicos=implode(",", $arrayUnico);
echo "Cadena sin modificar: ".$num;
echo "<br/>";
echo "Cadena sin repeticiones: ".$numUnicos;
?>