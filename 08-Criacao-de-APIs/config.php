<?php
    $db_host = '127.0.0.1';
    $db_name = 'new_php_08';
    $db_user = 'adm@adm';
    $db_pass = '229536';

    new PDO("mysql:dbname=$db_name;host=$db_host",$db_user, $db_pass);

    $array = [
        'error'  => '',
        'result' => []
    ];

?>