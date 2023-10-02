<?php
    $numArray=[];
    for ($i=0; $i<=4; $i++){
        $numero=rand(20, 30);
        $numArray[$i]=$numero;
    }

    for($i=0; $i<count($numArray); $i++){
        echo $numArray[$i];
        echo "<br/>";
    }
?>