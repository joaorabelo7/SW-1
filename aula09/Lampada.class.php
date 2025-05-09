<?php
    class lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;
        }        
        public function Desligar(){
            $this->Status = False;
        }        
        public function Mostrar_Dados(){
            echo "O fabricante é: " . $this->Fabricante. "<br>";
            echo "A Tensão é: " . $this->Tensao. "<br>";
            echo "O Potência é : " . $this->Potencia. "<br>";
            echo "A Cor é: " . $this->Cor. "<br>";
            if($this->Status == 1){
                echo "O Statusé: Ligada!! <br>";
            }else{
                echo"O Status é: Desligada!! <br> ";
            }

            
            
        }        
    }


?>