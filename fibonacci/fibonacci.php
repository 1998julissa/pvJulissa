<?php

echo "<hl> Lista de los Numeros Fibonacci</HL>";
function FIBONACCI($NUMERO)
{
    $numeros =[0,1];
    FOR ($i =2;   $i <$NUMERO;   $i++){
        $numeros[$i]   = $numeros[$i -2]+$numeros[$i -1];
        
    }
    return $numeros;
    
}
$resultado=fibonacci (1000);
echo join  (" , ",$resultado);