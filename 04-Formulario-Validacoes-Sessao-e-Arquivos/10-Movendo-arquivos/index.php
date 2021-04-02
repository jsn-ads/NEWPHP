<?php
    //renomear arquivo

    if(file_exists('arquivo.txt')){
        rename('arquivo.txt', 'modificado.txt');
    }
    
    //mover arquivo
    if(file_exists('modificado.txt')){
        rename('modificado.txt','arquivos/modificado.txt');
    }
    
    //copiar arquivo

    copy('arquivos/modificado.txt', 'copyarquivo.txt');
?>