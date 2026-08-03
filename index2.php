<?php
//Arquivo responsavel pela inicialização do sistema


include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';
require_once 'sistema/configuracao.php';
include_once './sistema/helpers.php';

$texto = "<h1>Texto</h1> <p>para</p> <article>resumir</article>";
echo resumirTexto($texto, 100,'','');
echo "<br>";
echo receberSalario(100.00, 0.00);
echo "<hr>";


