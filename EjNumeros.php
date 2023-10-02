<?php
$frase="";
/*
Imprimir numeros del 1 al 100
Se muestra Ay, si es multiplo de 3
Se muestra Macarena, si es multiplo de 5
Se muestra AY Macarena, si es multiplo de 3 y 5
Se muestra solo el número si no es multiplo de 3 ni 5
*/

for ($i=1;$i<=100;$i++){
    if($i%3==0 && $i%5==0){
        $frase="AY Macarena";
    } elseif ($i%3==0){
        $frase="AY";
    } elseif ($i%5==0){
        $frase="Macarena";
    } else {
        $frase="";
    };

    echo $i.".- ".$frase."<br>";
};


?>