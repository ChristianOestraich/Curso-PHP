<?php

    $nome = "Glaucio";


    function teste() {
        
        global $nome;
        echo $nome;
    }

    function teste2(){

        $nome = "João";

        echo $nome . "agora no teste dois";
    }

    teste();

    teste2();
?>