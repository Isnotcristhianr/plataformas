<?php
    //operaciones
    class operaciones{
        //atributos
        private $num1;
        private $num2;
        //constructor
        public function __construct($num1, $num2){
            $this->n1 = $num1;
            $this->n2 = $num2;
        }
        //metodos
        public function suma(){
            return $this->n1 + $this->n2;
        }
        public function resta(){
            return $this->n1 - $this->n2;
        }
        public function multiplicacion(){
            return $this->n1 * $this->n2;
        }
        public function division(){
            return $this->n1 / $this->n2;
        }
    }

?>