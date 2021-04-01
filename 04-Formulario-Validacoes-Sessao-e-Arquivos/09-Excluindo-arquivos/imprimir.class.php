<?php
    class Imprimir{
        function exibir(){
            if(file_exists('arquivo.txt')){
                $arquivo = file_get_contents('arquivo.txt');
                $arquivo = explode("\n",$arquivo);
                return $arquivo;
            }else{
                return array();
            }
        }
    }
?>