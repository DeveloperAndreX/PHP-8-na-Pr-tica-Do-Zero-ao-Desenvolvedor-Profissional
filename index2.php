<?php
//Arquivo responsavel pela inicialização do sistema
declare(strict_types = 1);
include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';
require_once 'sistema/configuracao.php';
include_once './sistema/helpers.php';

echo formatarValor(500,2);
echo "<br>";










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