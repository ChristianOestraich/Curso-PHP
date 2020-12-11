<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Christian Oestraich");
$cad->setEmail("christian@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();
