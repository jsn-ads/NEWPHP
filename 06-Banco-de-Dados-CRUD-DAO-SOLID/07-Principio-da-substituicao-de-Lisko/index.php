<?php
    class A{
        public function getNome(){
            return "Meu nome e AAAA";
        }
    }

    class B extends A{
        public function getNome(){
            return "Meu nome e BBBB";
        }
    }

    function imprimirNome(A $obj){
        return $obj->getNome();
    }

    $objeto1 = new A();
    $objeto2 = new B();

    echo imprimirNome($objeto1);
    echo "<br><br>";
    echo imprimirNome($objeto2);

?>