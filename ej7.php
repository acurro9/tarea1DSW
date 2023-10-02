<?php
    $numArray=[];
    $y=0;
    for ($i=1; $i<=100; $i++){
        if ($i%2==0){
            $numArray[$y]=$i;
            $y++;
        }
    }
    for($i=0; $i<count($numArray); $i++){
        echo $numArray[$i];
        echo "<br/>";
    }
?>