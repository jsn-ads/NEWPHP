<?php
    if(file_exists('arquivo.txt')){
        unlink('arquivo.txt');
        header("Location: index.php");
        exit;
    }else{
        header("Location: index.php");
         exit;
    }
?>