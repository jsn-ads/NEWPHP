<?php
    $texto = filter_input(INPUT_POST, 'texto');

    if(isset($texto) && !empty($texto)){
        if(file_exists('arquivo.txt')){
            $arquivo = file_get_contents('arquivo.txt');
            $arquivo.= "\n".$texto;
            file_put_contents('arquivo.txt',$arquivo);
            header("Location: index.php");
            exit;
        }else{
            file_put_contents('arquivo.txt',$texto);
            header("Location: index.php");
            exit;
        }
    }else{
        header("Location: index.php");
        exit;
    }
?>