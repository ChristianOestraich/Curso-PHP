<?php

    $nome = "joao rangel";

    /*Deixa a escrita da variavel com todas as letras maiúsculas*/ 
    $nome = strtoupper($nome);
    
    echo $nome;
    
    /*Deixa a escrita da variavel com todas as letras minusculas*/
    $nome = strtolower($nome);

    echo "<br>";

    echo $nome;

    echo "<br>";
    
    echo ucwords($nome);

    echo "<br>";
    
    echo ucfirst($nome);
?>