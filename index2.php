<?php

//Arquivo responsavel pela inicialização do sistema
declare(strict_types = 1);
include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';
require_once 'sistema/configuracao.php';
include_once './sistema/helpers.php';

$texto = "Mostra um texto de um paragrafo";

//Tipos de Dados em PHP
$string = 'texto';
$int = 10;
$float = 9.99;
$bool = false;
$nulo = null;

// O vardump verifica o tipo de dado:
var_dump($texto);
echo "<hr>";


echo saudaçao();
echo "<hr>";
echo resumirTexto($texto,50,'continue','texto2');




?>