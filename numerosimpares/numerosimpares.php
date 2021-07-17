<?php

 echo "<hl> Tabla que me muestra los numeros impares del 1 al 100</hl>";
 for ($i = 1;    $i<=100;   $i++) {
         if ($i %2 == 0) {
             echo "El Numero:" .$i . " Es Par ". "<br/>";
             
         } else { 
             echo "El numero:" .$i . "Es Impar " . "<br/>";
             
             
         }
         
 }