<?php
class CRectangulo {
    private $largo ; // atributos
    private $ancho;   //atributos
    function CRectangulo(){
        $this->largo=0;
        $this->ancho=0;
        }
        public function get_formulario(){
            $html= '
                    <form name= "transporte" action="" method="POST"> 
                    <table aling = "center" border = "1">
                        <tr>
                            <td colspan="2">RECTANGULO</td>
                        </tr>
                        <tr>
                            <td>Largo</td>
                            <td><input type="text" name="largo" size=4></td>
                        </tr>
                        <tr>
                            <td>Ancho</td>
                            <td><input type="text" name="ancho" size=4></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="guardar" value="Resolver"></center></td>
                        </tr>
                    </table>
                </form>';
        return $html;
        /*
            input type="text"
         * input type="number"
         * input type="email"
         * input type="password"
         * input type="submint"
         *          */
    }
    public function area($largo,$ancho){
        $area= $largo*$ancho;
       return $area;
    }
    public function perimetro($largo,$ancho){
        $perimetro = ($largo*2)+($ancho*2);
        return $perimetro;
    }

}

                    
                    
                    
                    
                    
                    
                    
                    
                    
                   
        

