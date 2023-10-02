<?php
    $cadena="2,3,4,1,5,3,6,7,8,1,10,0,20";
    $cadenaArray=explode(",", $cadena);
    $cadena2=[];

    for($i=0; $i<count($cadenaArray); $i++){
        if((int)$cadenaArray[$i]==0){
            $cadena2[$i]=0;
            break;
        } else {
            $cadena2[$i]=$cadenaArray[$i];
            for ($j=1; $j<=$cadena2[$i];$j++){
                $cadena2[$i+$j]="_";
            }
            $i+=$j-1;
        }
    }
    $nuevaCadena=implode(",", $cadena2);
    echo $nuevaCadena;
?>