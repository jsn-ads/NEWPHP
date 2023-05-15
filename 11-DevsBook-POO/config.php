<?php

    session_start();

    $base = 'http://localhost/devsbookoo';

    $db_name = 'devsbookpoo';
    $db_host = '127.0.0.1';
    $db_user = 'adm@adm';
    $db_pass = '229536';

    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

?>