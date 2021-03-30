<?php
    session_start();

    if(isset($_SESSION['nome']) && !empty($_SESSION['nome'])){
        header('Location: bem-vindo.php');
        exit;
    }else{
        header('Location: login.php');
        exit;
    }