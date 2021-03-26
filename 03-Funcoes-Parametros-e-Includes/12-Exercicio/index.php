<?php
    $data = Date('d/m/Y');

    $x = date('l',strtotime($data));

    switch ($x) {
        case 'Monday':
            echo "Segunda Feira";
            break;
        
        case 'Tuesday ':
            echo "Terceira Feira";
            break;
                
        case 'Wednesday':
            echo "Quarta Feira";
            break;

        case 'Thursday':
            echo "Quinta Feira";
            break;
                       
        case 'Friday':
            echo "Sexta Feira";
            break;

        case 'Saturday ':
            echo "Sabado";
            break;
                               
        case 'Sunday':
            echo "Domingo";
            break;

        default:
            echo "Error";
            break;
    }
?>