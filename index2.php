<?php
//Arquivo responsavel pela inicialização do sistema


include_once '../PHP_8_Na_Pratica_Zero_ao_Profissional/sistema/helpers.php';
require_once 'sistema/configuracao.php';
include_once './sistema/helpers.php';

(int)$valor = 5;
if(isset($valor)):

    /**
     * @author Andre Panizza
     * @param
     */

else:
    echo strtoupper("<b> a variavel não foi definida corretamente! </b>");
    unset($valor); // Destroi a variavel;
    exit(0);
endif;





?>