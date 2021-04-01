<?php
    $texto = file_get_contents('texto.txt');

    echo $texto;

    echo "<br><br>";

    $linhas = explode("\n", $texto);

    echo "Linhas: ".count($linhas);
?>