<?php
    //Principio que coloca a classe aberto para extensao mais fechado para alteracao

    //errado

    class ContratoClt{
        public function calcularSalario(){}
    }

    class Estagio{
        public function bolsaAuxilio(){}
    }

    class ContratoPj{
        public function calcularPagamento(){}
    }

    class FolhaDePagamanto{
        
        public function calcular($funcionario){
            
            $salario = 0;

            if($funcionario instanceof ContratoClt){
                $salario = $funcionario->calcularSalario();
            }else if($funcionario instanceof Estagio){
                $salario = $funcionario->bolsaAuxilio();
            }else if($funcionario instanceof ContratoPj){
                $salario = $funcionario->calcularPagamento();
            }

        }

    }

    //Correto 

    interface Remuneravel{
        public function remuneracao();
    }

    class ContratoClt2 implements Remuneravel{
        public function remuneracao(){}
    }

    class Estagio2 implements Remuneravel{
        public function remuneracao(){}
    }

    class ContratoPj2 implements Remuneravel{
        public function remuneracao(){}
    }

    class FolhaDePagamanto2{
        
        public function calcular(Remuneravel $funcionario){
            
            return $funcionario->remuneracao();

        }

    }
    
?>