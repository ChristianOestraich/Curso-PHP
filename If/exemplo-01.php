<?php

    $qualSuaIdade = 10;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeIdoso = 65;

    if($qualSuaIdade < $idadeCrianca){
    
        echo "Criança";
    
    } else if($qualSuaIdade < $idadeMaior) {

         echo "Adolecente";       
    
    } else if ($qualSuaIdade < $idadeMaior) {
    
        echo "Adulto";
    } else {

        echo "Idoso";
    }

    echo "<br>";

    echo ($qualSuaIdade < $idadeMaior)?"Menor de Idade":"Maior de idade";
?>