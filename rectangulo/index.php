<?php


include 'includes/class.rectangulo';
$rectangulo = new CRectangulo();
echo $rectangulo->get_formulario();
if (isset($_POST['guardar'])){
    echo "El resultado del area es igual a ".$rectangulo->area($_POST['largo'],$_POST['ancho'])
            . " el resultado del perimetro es igual a ".$rectangulo->perimetro($_POST['largo'],$_POST['ancho']);
} 

