<?php
    
    $senha = "1234";
    $senha2 = "1243";

    $hash = password_hash($senha, PASSWORD_DEFAULT);

    echo "Senha : ".$senha."<br><br>";

    echo "Hash : ".$hash."<br><br>";

    if(password_verify($senha, $hash)){
        echo "Acesso Liberado";
    }else{
        echo "Acesso Negado";
    }



?>