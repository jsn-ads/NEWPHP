<?php
    session_start();
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT);
   
    if($nome && $email &&$idade){
        setcookie('nome', $nome, time() + 84600 * 3); // 84600 equivale a um dia 
        echo 'Nome : '.$nome.'<br>E-mail : '.$email.'<br>Idade : '.$idade; 
    }else{ 
        $_SESSION['aviso'] = "Preencha os dados corretamente"; 
        header('Location: index.php');
        exit;
    }
?>