<?php

    $permitidos = ['image/jpeg', 'image/png', 'image/jpg'];

    if(in_array($_FILES['arquivo']['type'], $permitidos)){
        
        $nome = md5(time().rand(0,1000)).'.jpeg';

        move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'.$nome);

        header('Location: index.php');
        
        exit;
        
    }else{
        echo "Arquivo nao permitido";
    }

?>