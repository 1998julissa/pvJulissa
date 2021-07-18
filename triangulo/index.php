<?php

include 'includes/class. triangulo';
$triangulo= new triangulo ();
echo $triangulo-> get_formulario();
if (isset($POST['GUARDAR'])){
    echo "el resultado del area es igual a <strong>".$triangulo->area($_POST['base'],$POST['altura'])
     ."</strong>el resultado del perimetro es igual a <strong>".$triangulo->perimetro($_POST['base'],$_POST['altura'])."</strong>" ;     
}
