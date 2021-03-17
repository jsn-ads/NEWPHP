<?php
    $nome = "Neto";

    $nomeCompleto = $nome;

    $nomeCompleto .= isset($sobreNome) ? $sobreNome : "";

    //Na versão 7.4
    //$nomeCompleto .= $sobreNome ?? "";

    echo $nomeCompleto;

?>