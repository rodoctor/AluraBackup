<?php

$array = array(1, 2, 3, 4, 5, 6, 7);

    function somaArray($array){
        $soma = 0;

        for ($i=0; $i < sizeof($array); $i++) { 
            $soma += $array[$i];
        }
        return $soma;
        
    }

$resultado = somaArray($array);
echo $resultado;

?>


