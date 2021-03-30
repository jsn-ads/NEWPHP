<?php
    session_start();
    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST,'idade', FILTER_SANITIZE_NUMBER_INT);
   
    echo ($nome && $email &&$idade)? 
        'Nome : '.$nome.'<br>E-mail : '.$email.'<br>Idade : '.$idade 
    : 
        $_SESSION['aviso'] = "Preencha os dados corretamente"; 
        header('Location: index.php');
        exit;
?>