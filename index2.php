<?php
//Arquivo responsavel pela inicialização do sistema
declare(strict_types = 1);
//require_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/exemplo-02.php';
//include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';
//require_once 'sistema/configuracao.php';

// Busca a partir da pasta atual do script de forma segura
require_once __DIR__ . '/sistema/configuracao.php';
include_once __DIR__ . '/sistema/helpers.php';


//echo formatarValor(500);
//echo "<br>";
//echo formatarNumeros(1500.5, 42.333, 10000);
//echo "<br>";
//print_r(json_encode($numerosFormatados));
echo formatarNumbers();
/*
(int)$valor = 5;
(float)$valor1 = 5.5;
if (isset($valor,$valor1)):
*/
    /**
     * @author Andre Panizza
     * @var int $valor A variavel e validada no começo, porem o valor inicial sempre será inteiro
     * 
     */
  /*  if ($valor AND $valor1) {
        echo $valor;
    } else {
        echo 0;
    }
         // usando um ternario com a variavel $valor1:
         echo "<br><br>";
         echo ($valor1 ? $valor1 : 0);
         
else:
    echo strtoupper("<b> A variavel não foi definida corretamente! </b>");
    unset($valor, $valor1); // Destroi a variaveis
    exit(0);
endif;
*/