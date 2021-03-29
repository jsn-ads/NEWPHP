<?php
    $nome = filter_input(INPUT_POST,'nome');
    $idade = filter_input(INPUT_POST,'idade');
    echo ($nome && $idade)? 'Nome : '.$nome.'<br>Idade : '.$idade : header('Location: index.php');exit;
?>