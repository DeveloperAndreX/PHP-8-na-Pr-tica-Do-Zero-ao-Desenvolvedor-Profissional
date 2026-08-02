<?php
//Arquivo responsavel pela inicialização do sistema

include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';


$texto = "texto para resumir vindo de uma variavel";
$paragrafo = "um pedaço de papel";
$paragrafo_2 = "este e o segundo paragrafo";


echo saudaçao();  // Boa Tarde
echo "<br><br>";  // Pular Linha 
echo resumirTexto($texto,50,$paragrafo,$paragrafo_2);  // 4 parametros infomados.
// somente vai exibir o parametro $texto = "texto para resumir";




?>