<?php

    $diaDaSemana = 8; //date("w");

    switch($diaDaSemana){

        case 0:
            echo "Domingo";
        break;

        case 1:
            echo "Segunda-feira";
        break;

        case 2:
            echo "Segunda-feira";
        break;

        case 3:
            echo "Terça-feira";
        break;

        case 4:
            echo "Quarta-feira";
        break;

        case 5:
            echo "Quinta-feira";
        break;

        case 6:
            echo "Sexta-feira";
        break;

        case 7:
            echo "Sabado";
        break;

        default:
            echo "Data Invalida";
        break;
    }
?>