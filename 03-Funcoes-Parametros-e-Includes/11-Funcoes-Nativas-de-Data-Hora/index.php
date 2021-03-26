<?php
    echo date('d/m/Y H:i:s');

    //sempre salvar data no modo Padrao ano/mes/dia

    echo "<br><br>";

    echo date('Y/m/d');
    
    echo "<br><br>";

    $data = date('Y/m/d');

    echo date('d/m/Y', strtotime($data))
?>