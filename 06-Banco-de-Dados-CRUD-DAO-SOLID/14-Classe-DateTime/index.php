<?php
    $date = new DateTime();

    $date->add(DateInterval::createFromDateString("2 years 2 days 5 minutes"));
    $date->sub(DateInterval::createFromDateString("2 years 2 days 5 minutes"));

    //$date->setTimezone(new DateTimeZone("America/Sao_Paulo"));

    //echo $date->format('d/m/Y H:i:s');

    $data = new DateTime();

    $evento = new DateTime('2021-05-07');
    
    echo "<br><br>";
    echo $data->format("d/m/Y H:i:s");
    echo "<br><br>";
    echo $evento->format("d/m/Y H:i:s");
    
    echo "<br><br>";
    if($data < $evento){
        // segundo data tem que ser uma data absoluta
        $diff = $data->diff($evento);
        echo $diff->format("%m meses, %d dias, %h horas, %i minutos, %s segundos");
    }else{
        $evento->add(DateInterval::createFromDateString("30 days"));
    }

?>