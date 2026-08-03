<?php
//Arquivo responsavel pela inicialização do sistema


include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';
require_once 'sistema/configuracao.php';
include_once './sistema/helpers.php';

$texto = "<h1>Texto </h1> <p>para</p> resumir";
echo resumirTexto($texto, 50,'','');

