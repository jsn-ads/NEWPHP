<?php

    $base = 'http://localhost/devsbookoo';

    $db_name = 'devsbookpoo';
    $db_host = 'localhost';
    $db_user = 'adm@adm';
    $db_pass = '229536';

    $pdo = new PDO("mysql:dbname=".$db_name.";host".$db_host,$db_user,$db_pass);

?>