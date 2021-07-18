<?php
class triangulo{
    private $base; //atributos
    private $altura;//atributos
    function triangulo(){
         $this-> base=0;
         $this-> altura=0;
          }
          public function get_formulario(){
            $html = '
                <form name= "transporte" action="" method="POST"> 
                    <table aling = "center" border = "1">
                        <tr>
                            <td colspan="2">triangulo</td>
                        </tr>
                        <tr>
                            <td>Largo</td>
                            <td><input type="text" name="base" size=4></td>
                        </tr>
                        <tr>
                            <td>Ancho</td>
                            <td><input type="text" name="altura" size=4></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="guardar" value="Resolver"></center></td>
                        </tr>
                    </table>
                </form>';
        return $html;
        
    }
          
public function area($base,$altura){
    $resultado=$base*$altura;
    $area=$base*$altura;
    return $resultado;
           
    
}
public function perimetro($base,$altura){
    $perimetro== ($base*2)+($altura*2);
      return $perimetro;
}

}

