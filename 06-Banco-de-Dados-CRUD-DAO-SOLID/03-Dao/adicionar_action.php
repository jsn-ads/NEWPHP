<?php
    require ("config.php");
    require ("dao/UsuarioDaoMysql.class.php");

    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($nome && $email){

        $usuarioDao = new UsuarioDaoMysql($pdo);

        if($usuarioDao->findEmail($email) === false){

            $usuario = new Usuario();

            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuarioDao->add($usuario);

            header("Location: index.php");    
            exit;

        }else{   

            header("Location: adicionar.php");        
            exit;

        }
    }else{
        
        header("Location: adicionar.php");
        exit;
    }
?>