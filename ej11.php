<?php
    $arrayNum=[16,17,4,3,5,2];
    $y=0;
    $suma=0;
    $leader=[];
    for($i=0; $i < count($arrayNum); $i++){
        $suma=0;
        for ($j=count($arrayNum)-1; $j>$i; $j--){
            $suma+=(int)$arrayNum[$j];
            
        }
        if($arrayNum[$i]>$suma){
            $leader[$y]=$arrayNum[$i];
            $y++;
        }
    }
    for($i=0; $i < count($leader); $i++){
        echo "Lider: ".$leader[$i];
        echo "<br>";
    }
?>