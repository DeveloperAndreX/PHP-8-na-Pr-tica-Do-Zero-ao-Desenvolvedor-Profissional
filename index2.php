<?php
//Arquivo responsavel pela inicialização do sistema

include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';

require_once 'sistema/configuracao.php';
include_once './sistema/helpers.php';

$texto = "texto para resumir a variavel";

$string = '';

echo saudaçao();
echo "<hr>";
echo resumirTexto($texto,50,'continue','texto2');




?>