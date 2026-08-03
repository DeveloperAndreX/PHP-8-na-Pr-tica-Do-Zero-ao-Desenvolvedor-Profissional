<?php

//Arquivo responsavel pela inicialização do sistema
declare(strict_types=1);

include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';
require_once 'sistema/configuracao.php';
include_once './sistema/helpers.php';



$texto = "Texto para resumir";


/*
$texto1 = "Texto 2 para resumir parcialmente     ";
$texto2 = "     Texto 3 para resumir Totalmente";

echo $total = mb_strlen(trim($texto));
echo "<br>";
echo $total1 = mb_strlen(ltrim($texto1));
echo "<br>";
echo $tatal2 = mb_strlen(rtrim($texto2));
echo "<br>";

echo $resumo = mb_substr($texto, 0, 5);
echo "<br>";
echo "essa e a ocorrencia: " .  $ocorrencia = mb_strrpos($texto, 't');

*/


//echo "<br>";
//echo receberSalario(600.00, 400.00);
// O vardump verifica o tipo de dado:
//var_dump($texto);
//echo "<hr>";
//echo saudaçao();
//echo "<hr>";
echo resumirTexto($texto, 50, 'continue', 'texto2');
